<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP,
che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php
  include 'dati.php';
  include 'header.php';
 ?>
 <main>
   <div class="live-records-container">
     <div class="live-records">
       <?php
         foreach ($database as $value) { ?>
       <div
         class="live-records-card">
         <div class="live-records-img">
           <img src="<?= ($value['poster']); ?>" alt="">
         </div>
         <div class="live-records-info">
           <h2><?=  ($value['title']);  ?></h2>
           <ul>
             <li><?= ($value['author']); ?></li>
             <li><?= ($value['year']); ?></li>
           </ul>
         </div>
       </div>
         <?php }
         ?>

     </div>
     <div class="select">
       <span>Scegli il genere che fa per te:</span>
       <select>
         <option value=""></option>
         <option value=""></option>
         <option value=""></option>
         <option value=""></option>
       </select>
     </div>
   </div>
   <aside>
     <div
       class="description-container"
       >
       <div
         class="live-records-description">
         <div class="live-records-paragraph">
           <p>Informazioni aggiuntive:</p>
         </div>
         <div class="live-records-description-info-container">
           <ul class="live-records-info">
             <li><b>Author:</b> author</li>
             <li><b>Title:</b> title</li>
             <li><b>Year:</b> year</li>
             <li><b>Genre:</b> genre</li>
           </ul>
         </div>
       </div>

     </div>
   </aside>
 </main>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="./Assets/js/main.js" charset="utf-8"></script>

   <div class="">
         <img  alt="">

   </div>
 </main>
 <?php
 include 'footer.php'
  ?>
