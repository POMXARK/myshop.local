{* страница пользователя *}

<h1>Ваши регистрационные даные:</h1>

<table border="0">
        <tr>
            <td>Логин (email)</td>
            <td>{$arUser['email']}</td>
        </tr>
        <tr>
            <td>Имя</td>
            <td><input type="text" id="newName" value="{$arUser['name']}" /></td>
        </tr>
        <tr>
            <td>Тел</td>
            <td><input type="text" id="newPhone" value="{$arUser['phone']}" /></td>
        </tr>
        <tr>
            <td>Адрес</td>
            <td><textarea  id="newAdress"  />{$arUser['adress']}</textarea></td>
        </tr>
        <tr>
            <td>Новый пароль</td>
            <td><input type="password" id="newPwd1" value="" /></td>
        </tr>
        <tr>
            <td>Повтор пароля</td>
            <td><input type="password" id="newPwd2" value="" /></td>
        </tr>
        <tr>
            <td>Для того чтобы сохранить данные введите текущий пароль</td>
            <td><input type="password" id="curPwd" value="" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="button" value="Сохранить изменения" onClick="updateUserData();"/></td>
        </tr>
</table>

<h2>Заказы:</h2>
{if ! $rsUserOrders}
    Нет заказов
{else}
    <table border="1" cellpadding="1" cellspacing="1">
        <tr>
            <th>№</th>
            <th>Действие</th>
            <th>ID заказа</th>
            <th>Статус</th>
            <th>Дата создания</th>
            <th>Дата оплаты</th>
            <th>Дополнительная информация</th>
        </tr>
        {foreach $rsUserOrders as $item name=orders}
            <tr>
                <td>{$smarty.foreach.orders.iteration}</td>
                <td><a href="#" onclick="showProducts('{$item['id']}'); return false;" >Показать товар заказа</a></td>
                <td>{$item['id']}</td>
                <td>{if $item['status']}<span style="color: green">закрыт{else}<span style="color: blue">открыт{/if}</span></td>
                <td>{$item['date_created']}</td>
                <td>{if $item['date_payment']}<span style="color: green">{$item['date_payment']}{else}<span style="color: blue">не оплачено{/if}</span></td>
                <td>{$item['comment']}</td>
            </tr>

            <tr class="hideme" id="purchasesForOrderId_{$item['id']}" >
                <td colspan="7">
                {if $item['children']}
                    <table border="1" cellpadding="1" cellspacing="1" width="100%">
                        <tr>
                            <th>№</th>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Количество</th>
                        </tr>
                {foreach $item['children'] as $itemChild name=products}
                    <tr>
                        <td>{$smarty.foreach.products.iteration}</td>
                        <td>{$itemChild['product_id']}</td>
                        <td><a href="/product/{$itemChild['product_id']}/">{$itemChild['name']}</a></td>
                        <td>{$itemChild['price']}</td>
                        <td>{$itemChild['amount']}</td>
                    </tr>
                {/foreach}
                </table>
                {/if}
                </td>
            </tr>

        {/foreach}
    </table>
{/if}