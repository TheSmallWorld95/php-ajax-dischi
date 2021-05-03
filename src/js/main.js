Vue.config.devtools = true;

// BONUS
// Creare una select con tutti i generi dei dischi. In base a cosa scegliamo nella select, vedremo i corrispondenti cd.
// BONUS 2
// Ordinare i dischi per anno di uscita.

var app = new Vue (
  {
    el: "#root",
    data:{
      liveRecords: [],
      index: 0,
    },
    created() {
      axios.get("http://localhost/PHP/PhpDischi/php-ajax-dischi/php/dischi.php")
      .then((response) => {
        console.log(response.data);
        this.liveRecords = response.data;
      });
    },
    methods: {
      active: function (index) {
        this.index = index;
      }
    }
  }
);
