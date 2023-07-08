@extends('auth.layouts.master')

@section('title', 'Заказы')

@section('content')
<div class="col-md-12">
    <h1>Заказы</h1>
    <table class="table">
        <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Имя
                </th>
                <th>
                    Телефон
                </th>
                <th>
                    Когда отправлен
                </th>
                <th>
                    Сумма
                </th>
                <th>
                    Действия
                </th>
            </tr>
            <tr>
                <td>2</td>
                <td>Test</td>
                <td>77777777</td>
                <td>19:56 03/07/2023</td>
                <td>89990 ₽</td>
                <td>
                    <div class="btn-group" role="group">
                        <a class="btn btn-success" type="button" href="http://internet-shop.tmweb.ru/person/orders/2">Открыть</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection