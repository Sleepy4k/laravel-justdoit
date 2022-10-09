<?php

namespace App\DataTables\Audit;

use App\Traits\LogReader;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SystemDataTable extends DataTable
{
    use LogReader;

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->of($query['logs'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Logging/QueryDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        return collect(
            (object) $this->getFileContent('daily')
        );
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->serverSide(false)
                    ->setTableId('systemdatatable-table')
                    ->columns($this->getColumns())
                    ->language($this->getLanguage())
                    ->minifiedAjax()
                    ->dom('lBfrtip')
                    ->lengthChange(true)
                    ->lengthMenu()
                    ->pageLength(10)
                    ->responsive(true)
                    ->autoWidth(true);
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
                    ->title(trans('table.system.id'))
                    ->addClass('text-center'),
            Column::make('timestamp')
                    ->title(trans('table.system.timestamp'))
                    ->addClass('text-center'),
            Column::make('env')
                    ->title(trans('table.system.env'))
                    ->addClass('text-center'),
            Column::make('type')
                    ->title(trans('table.system.type'))
                    ->addClass('text-center'),
            Column::make('message')
                    ->title(trans('table.system.message'))
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
        return 'System_' . date('YmdHis');
    }
}
