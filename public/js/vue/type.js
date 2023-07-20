
export default{
   data(){
    return{

    add_name:''

    }
   },

   methods:{

    addData(){

        axios.post("http://localhost/LaravelProjectsecond/Project/public/api/types",{

            name:this.add_name})
            .then(response=>{
                console.log(response.data)
            })

    }

   }
}