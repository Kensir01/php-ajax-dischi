const app = new Vue ({

    el: '#app',

    data:{
        dischi: [],
    },

    created() {

        axios.get('http://localhost/php-ajax-dischi/server.php').then(response => {

            console.log(response);
            this.dischi = response.data;
        });


    }

})