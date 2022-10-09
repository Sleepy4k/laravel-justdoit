<?php

namespace App\DataTables\Audit;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\Services\DataTable;

class ModelDataTable extends DataTable
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
            ->editColumn('subject', function($query){
                $data = null;
                if (empty($query->subject_id)) {
                    $data = '-';
                } else {
                    $data = $query->subject_id;
                }
                if (empty($query->subject_type)) {
                    $data .= ' | -';
                } else {
                    $data .= ' | '.$query->subject_type;
                }

                return $data;
            })
            ->editColumn('user', function($query){
                $data = null;
                if (empty($query->causer_id)) {
                    $data = '-';
                } else {
                    $data = $query->causer_id;
                }
                if (empty($query->causer_type)) {
                    $data .= ' | -';
                } else {
                    $data .= ' | '.$query->causer_type;
                }

                return $data;
            })
            ->editColumn('properties', function($query){
                return json_encode($query->properties);
            })
            ->editColumn('created_at', function($query){
                return $query->created_at->format('d - m - Y');
            })
            ->editColumn('updated_at', function($query){
                return $query->updated_at->format('d - m - Y');
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Logging/ModelDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Activity $model)
    {
        return $model->where('log_name', '!=', 'login')->where('log_name', '!=', 'logout')->latest();
    }

     /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('modeldatatable-table')
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
                    ->title(trans('table.audit.id'))
                    ->addClass('text-center'),
            Column::make('log_name')
                    ->title(trans('table.audit.category'))
                    ->addClass('text-center'),
            Column::make('description')
                    ->title(trans('table.audit.description'))
                    ->addClass('text-center'),
            Column::computed('subject')
                    ->title(trans('table.audit.subject'))
                    ->addClass('text-center'),
            Column::computed('user')
                    ->title(trans('table.audit.user'))
                    ->addClass('text-center'),
            Column::make('properties')
                    ->title(trans('table.audit.content'))
                    ->addClass('text-center'),
            Column::computed('created_at')
                    ->title(trans('table.audit.created_at'))
                    ->addClass('text-center'),
            Column::computed('updated_at')
                    ->title(trans('table.audit.updated_at'))
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
        return 'Model_' . date('YmdHis');
    }
}