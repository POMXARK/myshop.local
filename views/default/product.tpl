{* страница продукта *}
    <h3 id="jg_photo_title" class="jg_imgtitle">
      {$rsProduct['name']}
    </h3>
    
      <img  width="575" id="jg_photo_big" class="jg_photo" src="/images/products/{$rsProduct['image']}">
       
  
    
            Стоимость: {$rsProduct['price']}
            <a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}class="hideme"{/if} href="#" onClick="removeFromCart({$rsProduct['id']}); return false;" alt="Удалить из корзины">Удалить из корзины</a>
            <a id="addCart_{$rsProduct['id']}" {if $itemInCart}class="hideme"{/if} href="#" onClick="addToCart({$rsProduct['id']}); return false;" alt="Добавить в корзину">Добавить в корзину</a> 
    
         <p> Описание <br />{$rsProduct['description']}</p>