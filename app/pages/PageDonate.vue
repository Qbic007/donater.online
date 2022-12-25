<template>
  <div class="page-donate-wrapper">
    <form-payment  v-if="showForm" />
    <button-donate v-else text="ДОНАТИТЬ" @click="onClick()"/>
  </div>
</template>

<script>
import ButtonDonate from "../components/ButtonDonate";
import {ref} from 'vue';
import FormPayment from "../components/FormPayment";

export default {
  components: {
    FormPayment,
    ButtonDonate
  },
  
  setup() {
    const showForm = ref(false)
    
    const onClick = () => {
      showForm.value = !showForm.value;
    }
    
    return {
      showForm,
      onClick
    }
  }
};
</script>

<style>
  .page-donate-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
  }
</style>