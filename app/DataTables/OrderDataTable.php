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
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'order.action')
            ->setRowId('id');
            // ->EloquentDataTable paginate(4);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Order $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Order $model): QueryBuilder
    {
        // return $model->newQuery();
        return Order::with(['products' => function($q){$q ->select('ar_name');}])->orderBy('created_at', 'desc')->take(3);
        // return Order::with('products')->select('ar_name.*')->orderBy('created_at', 'desc');
        // return  Order::with(['products' => function($q){$q ->select('ar_name');}])->orderBy('created_at', 'desc')->limit(4)->get();
        // return Order::orderBy('created_at', 'desc')->limit(3)->get();
        // return view('admin.last', compact('orders','users'));
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('order-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                 ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
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

            // Column::make('products' ,'products.ar_name'),
            // Column::make('products')->title('products')->data('products.ar_name')->name('products.ar_name'),
            Column::make('add your columns'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Order_' . date('YmdHis');
    }
}
