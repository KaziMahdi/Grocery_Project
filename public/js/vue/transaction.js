

export default{
    
    data(){

        return{
            
            transactions:[]
        }
    },

methods:{

    getTransaction(){
        axios.get("http://localhost/LaravelProjectsecond/Project/public/api/types")
        .then(response => {
            this.transactions=[...response.data]
        })
        .catch(error =>{
            console.error(error);
        });
    }
},

mounted(){

    this.getTransaction();
}


}