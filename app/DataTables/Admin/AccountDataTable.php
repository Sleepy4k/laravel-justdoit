<?php

namespace App\DataTables\Admin;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AccountDataTable extends DataTable
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
                return '<a href="'.route("akun.edit", $query->id).'"><i class="fa-solid fa-pen-to-square"></i></a> | <form action="'.route("akun.destroy", $query->id).'" method="post" style="display: inline-block">'.csrf_field().method_field("DELETE").'<a href="" class="confirm-delete"><i class="fa-solid fa-trash"></i></a></form>';
            })
            ->editColumn('roles', function($query){
                return $query->roles->pluck('name')[0];
            })
            ->editColumn('created_at', function($query){
                return $query->created_at->format('d - m - Y');
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->latest();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('accountdatatable-table')
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
                    ->title(trans('table.account.uid'))
                    ->addClass('text-center'),
            Column::make('username')
                    ->title(trans('table.account.username'))
                    ->addClass('text-center'),
            Column::make('surename')
                    ->title(trans('table.account.surename'))
                    ->addClass('text-center'),
            Column::computed('roles')
                    ->title(trans('table.account.role'))
                    ->addClass('text-center'),
            Column::make('created_at')
                    ->title(trans('table.account.joined_at'))
                    ->addClass('text-center'),
            Column::computed('action')
                    ->title(trans('table.account.action'))
                    ->exportable(false)
                    ->printable(false)
                    ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Account_' . date('YmdHis');
    }
}