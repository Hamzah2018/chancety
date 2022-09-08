<?php

namespace App\DataTables;
use App\Models\{Order, User};
// use App\Models\Order;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class OrderDataTable extends DataTable
{

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'order.action')
            ->setRowId('id');
    }

    public function query(Order $model): QueryBuilder
    {
        // return $model->newQuery();
        return Order::with(['products' => function($q){$q ->select('ar_name');}])->orderBy('created_at', 'desc')->take(3);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('order-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    // ->dom('Bfrtip')
                    ->orderBy(1)
                    ->parameters([
                        'dom' => 'Blfrtip',
                        'lengthMenu' =>[[5,10,15,20,-1],[5, 10,20,'All Record']]
                    ])
                ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    protected function getColumns(): array
    {

        return [
            'created_at',
            'id',
            'total',
            // 'ar_name',
           Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make( data: 'products[].ar_name', name: 'products[].ar_name')->title('products'),
            Column::make('add your columns'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }
    protected function filename(): string
    {
        return 'Order_' . date('YmdHis');
    }
}
