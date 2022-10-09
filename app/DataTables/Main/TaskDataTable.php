<?php

namespace App\DataTables\Main;

use App\Models\Task;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TaskDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function($query){
                return '<a href="'.route("task.show", $query->id).'"><i class="fa-solid fa-eye"></i></a> | <a href="'.route('task.edit', $query->id).'"><i class="fa-solid fa-pen-to-square"></i></a> | <form action="'.route("task.destroy", $query->id).'" method="post" style="display: inline-block">'.csrf_field().method_field("DELETE").'<a href="" class="confirm-delete"><i class="fa-solid fa-trash"></i></a></form>';
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Farm $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Task $model)
    {
        return $model->where('user', request()->user()->id)->latest();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('task-table')
                    ->columns($this->getColumns())
                    ->language($this->getLanguage())
                    ->minifiedAjax()
                    ->dom('lBfrtip')
                    ->orderBy(0, 'ASC')
                    ->lengthChange(true)
                    ->lengthMenu()
                    ->pageLength(10)
                    ->responsive(true)
                    ->autoWidth(true)
                    ->buttons(
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('copy'),
                        Button::make('reload')
                    )
                    ->ajax([]);
    }

    /**
     * Get language.
     *
     * @return array
     */
    protected function getLanguage()
    {
        return trans('datatable.translate');
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id')
                    ->data('DT_RowIndex')
                    ->title(trans('table.task.id'))
                    ->addClass('text-center'),
            Column::make('task')
                    ->title(trans('table.task.task'))
                    ->addClass('text-center'),
            Column::make('subject')
                    ->title(trans('table.task.subject'))
                    ->addClass('text-center'),
            Column::make('priority')
                    ->title(trans('table.task.priority'))
                    ->addClass('text-center'),
            Column::make('isDone')
                    ->title(trans('table.task.isDone'))
                    ->addClass('text-center'),
            Column::computed('action')
                    ->title(trans('table.task.action'))
                    ->exportable(false)
                    ->printable(false)
                    ->addClass('text-center')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Task_' . date('YmdHis');
    }
}