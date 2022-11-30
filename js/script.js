const { createApp } = Vue;

createApp({
  data() {
    return {
      newTodoText: "",
      mydata: [],
      apiUrl: "./server.php",
    };
  },
  methods: {
    getData() {
      axios.get(this.apiUrl).then((res) => {
        // console.log(res.data);
        this.mydata = res.data;
      });
    },
    addTodo() {
      const data = {
        newTodoText: this.newTodoText,
      };
      axios
        .post(this.apiUrl, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((res) => {
          console.log(res.data);

          this.getData();
        });
    },
  },
  mounted() {
    this.getData();
  },
}).mount("#app");
