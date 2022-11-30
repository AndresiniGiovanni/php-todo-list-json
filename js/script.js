const { createApp } = Vue;

createApp({
  data() {
    return {
      mydata: [],
    };
  },
  methods: {
    getData() {
      axios.get("server.php").then((res) => {
        this.mydata = res.data;
      });
    },
  },
  mounted() {

  },
}).mount("#app");
