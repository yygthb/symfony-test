<template>
  <div class="app">
    <p v-if="this.data">server data: {{ this.data }}</p>
  </div>
</template>

<script>
import axios from 'axios';

const getUrl = '/api/get';

export default {
  data() {
    return {
      isLoading: false,
      data: '',
    };
  },
  mounted() {
    this.getJSONFromServer();
  },
  methods: {
    async getJSONFromServer() {
      try {
        const res = await axios(window.location.origin + getUrl);
        this.data = res.data;
      } catch (error) {
        console.log('get json from server Error');
        throw new Error(error);
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.app {
  border-top: 1px solid #aaa;
  padding-top: 10px;
  margin: 20px 0;
  color: rgb(0, 110, 255);
}
</style>
