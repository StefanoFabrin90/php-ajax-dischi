const app = new Vue({
    el: '#app',
    data: {
        dischi: null,
    },
    created() {
        this.getDischi();
    },
    methods: {
        getDischi() {
            //console.log('check dischi');
            axios.get('http://localhost:8888/PhpDischi/repoAjax/scripts/data.php')
            .then(response => {
                console.log(response.data);
                this.dischi = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
    }
});