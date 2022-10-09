<?php

namespace App\DataTables\System;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Spatie\TranslationLoader\LanguageLine;

class TranslateDataTable extends DataTable
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
                return '<a href="'.route("translate.edit", $query->id).'"><i class="fa-solid fa-pen-to-square"></i></a> | <form action="'.route("translate.destroy", $query->id).'" method="post" style="display: inline-block">'.csrf_field().method_field("DELETE").'<a href="" class="confirm-delete"><i class="fa-solid fa-trash"></i></a></form>';
            })
            ->editColumn('lang_id', function($query) {
                if ($query->text) {
                    return $query->text['id'];
                } else {
                    return '-';
                }
            })
            ->editColumn('lang_en', function($query){
                if ($query->text) {
                    return $query->text['en'];
                } else {
                    return '-';
                }
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\LanguageLine $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(LanguageLine $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('translatedatatable-table')
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
                    ->title(trans('table.translate.id'))
                    ->addClass('text-center'),
            Column::make('group')
                    ->title(trans('table.translate.group'))
                    ->addClass('text-center'),
            Column::make('key')
                    ->title(trans('table.translate.key'))
                    ->addClass('text-center'),
            Column::computed('lang_id')
                    ->title(trans('table.translate.lang_id'))
                    ->addClass('text-center'),
            Column::computed('lang_en')
                    ->title(trans('table.translate.lang_en'))
                    ->addClass('text-center'),
            Column::computed('action')
                    ->title(trans('table.translate.action'))
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
        return 'Translate_' . date('YmdHis');
    }
}
