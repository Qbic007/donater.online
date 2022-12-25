<template>
  <a-card
      hoverable
      style='width: 100%'
  >
    <a-form
        :model='payment'
        :label-col='labelCol'
        :wrapper-col='wrapperCol'
        :rules='rules'
    >
      <a-form-item
          label='Payment amount'
          v-bind='validationErrors.amount'
      >
        <a-input
            v-model:value='payment.amount'
        />
      </a-form-item>
      <a-form-item
          :wrapper-col='{ span: 14, offset: 4 }'
      >
        <a-button
            size='large'
            type='primary'
            @click='handleSubmit'
        >
          {{ 'Create' }}
        </a-button>
        <a-button
            size='large'
            style='margin-left: 10px'
            @click='resetFields'
        >
          Reset
        </a-button>
      </a-form-item>
    </a-form>
  </a-card>
</template>
<script>
import api from '../api';
import {Form} from 'ant-design-vue';
import {reactive} from 'vue';
import {useRouter} from 'vue-router'

const {useForm} = Form;

export default {

  setup() {
    let payment = reactive({
      amount: '',
    });

    const rules = reactive({
      amount: [
        {
          required: true,
          message: 'Please provide amount',
          trigger: 'blur'
        },
      ],
    });

    const {
      resetFields,
      validate,
      validateInfos: validationErrors
    } = useForm(payment, rules);

    const router = useRouter();

    const handleSubmit = () => {
      validate()
          .then(
              async () => {
                const updatedPayment = await api.helpPost('payments', payment);
                Object.assign(payment, updatedPayment);
                router.push({name: 'payment-success'});
              }
          )
          .catch(() => {
          });
    }

    return {
      resetFields,
      validationErrors,
      payment,
      handleSubmit,
      rules
    };
  },
  data() {
    return {
      labelCol: {span: 4},
      wrapperCol: {span: 14},
    }
  },
};
</script>