<?php
/**
 * 
 *The template Name: mars-pages
 * 
 *
 * @package MARS
 */

get_header();
?>


<div class="container"> 
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12">
      
      <div class="overlay">
        <div class="fog">
          <div class="wrap">
            <p>Точка назначения</p>               
            <h1>марс</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Бронирование<br>
          билетов</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form class="modal__form" action="">
          <div class="bron">
            <div class="data-zaezd">
              <label for="">Дата заезда</label>
              <div class="data-zaezd__input">
                <input type="date" name="" id="">
              </div>
            
            </div>
            <div class="data-zaezd">
              <label for="">Дата выезда</label>
              <div class="data-zaezd__input">
                <input class="data-zaezd__input" type="date" name="" id="">
              </div>
              
            </div>
            <div class="data-zaezd">
              <label for="">Количество</label>
              <div class="data-zaezd__input">
                <input class="data-zaezd__input" type="number" name="" id="">
              </div>            
            </div>
          </div>
          <div class="bron__button">
            <button type="button" class="btn btn__bron">Купить билеты</button>
          </div>
        </form>
      </div>      
    </div>
  </div>
</div>

<?php
get_footer();
