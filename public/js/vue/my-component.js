
let id=0;
export default{
    data() {
        return {        
          newTodos:'',
          todos:[]
        }
    },
    methods: {
          
        addTodo() {
            this.todos.push({ id: id++, title: this.newTodo })
            this.newTodo = ''
        },
        removeTodo(todo) {
            this.todos = this.todos.filter((t) => t !== todo)
        },
        getTodos(){
            axios.get("https://jsonplaceholder.typicode.com/todos/")
            .then(response => {
            this.todos = [...response.data].slice(0, 20)
            })
        }
    },
    computed: {
        now() {
            return Date.now()
        }
        
    },
    mounted() {
     
       this.getTodos();

    }
}

   