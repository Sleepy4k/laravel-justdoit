<?php

namespace App\DataTables\System;

use App\Models\Menu;
use App\Models\Page;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Services\DataTable;

class PageDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $menus = Menu::get();
        $permissions = Permission::get();

        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($query){
                return '<a href="'.route("page.edit", $query->id).'"><i class="fa-solid fa-pen-to-square"></i></a> | <form action="'.route("page.destroy", $query->id).'" method="post" style="display: inline-block">'.csrf_field().method_field("DELETE").'<a href="" class="confirm-delete"><i class="fa-solid fa-trash"></i></a></form>';
            })
            ->editColumn('menu_id', function($query) use($menus) {
                foreach ($menus as $menu) {
                    if ($query->menu_id === $menu->id) {
                        return $menu->name;
                    }
                }
            })
            ->editColumn('permission', function($query) use($permissions) {
                foreach ($permissions as $permission) {
                    if ($query->permission === $permission->name) {
                        return $permission->name;
                    }
                }
            })
            ->editColumn('icon', function($query){
                if (empty($query->icon)) {
                    return '-';
                } else {
                    return $query->icon;
                }
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Page $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Page $model)
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
                    ->setTableId('pagedatatable-table')
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
                    ->title(trans('table.page.id'))
                    ->addClass('text-center'),
            Column::make('name')
                    ->title(trans('table.page.name'))
                    ->addClass('text-center'),
            Column::make('label')
                    ->title(trans('table.page.label'))
                    ->addClass('text-center'),
            Column::make('menu_id')
                    ->title(trans('table.page.menu'))
                    ->addClass('text-center'),
            Column::make('page_url')
                    ->title(trans('table.page.page_url'))
                    ->addClass('text-center'),
            Column::make('icon')
                    ->title(trans('table.menu.icon'))
                    ->addClass('text-center'),
            Column::make('permission')
                    ->title(trans('table.page.permission'))
                    ->addClass('text-center'),
            Column::computed('action')
                    ->title(trans('table.page.action'))
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
        return 'Page_' . date('YmdHis');
    }
}