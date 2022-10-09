<?php

namespace App\DataTables\System;

use App\Models\Category;
use App\Models\Menu;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class MenuDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $categories = Category::get();
        $permissions = Permission::get();

        return datatables()
            ->eloquent($query)
            ->addColumn('action', function($query){
                return '<a href="'.route("menu.edit", $query->id).'"><i class="fa-solid fa-pen-to-square"></i></a> | <form action="'.route("menu.destroy", $query->id).'" method="post" style="display: inline-block">'.csrf_field().method_field("DELETE").'<a href="" class="confirm-delete"><i class="fa-solid fa-trash"></i></a></form>';
            })
            ->editColumn('category', function($query) use($categories) {
                foreach ($categories as $category) {
                    if ($query->category === $category->id) {
                        return $category->name;
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
            ->editColumn('page_url', function($query) {
                if ($query->page_url) {
                    return $query->page_url;
                } else {
                    return '-';
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
     * @param \App\Models\Menu $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Menu $model)
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
                    ->setTableId('menudatatable-table')
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
                    ->title(trans('table.menu.id'))
                    ->addClass('text-center'),
            Column::make('name')
                    ->title(trans('table.menu.name'))
                    ->addClass('text-center'),
            Column::make('label')
                    ->title(trans('table.menu.label'))
                    ->addClass('text-center'),
            Column::make('icon')
                    ->title(trans('table.menu.icon'))
                    ->addClass('text-center'),
            Column::make('category')
                    ->title(trans('table.menu.category'))
                    ->addClass('text-center'),
            Column::make('type')
                    ->title("Tipe Menu")
                    ->addClass('text-center'),
            Column::make('page_url')
                    ->title("Halaman URL")
                    ->addClass('text-center'),
            Column::make('permission')
                    ->title(trans('table.menu.permission'))
                    ->addClass('text-center'),
            Column::computed('action')
                    ->title(trans('table.menu.action'))
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
        return 'Menu_' . date('YmdHis');
    }
}