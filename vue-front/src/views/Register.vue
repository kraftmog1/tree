<template>
<div>
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Regisration</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Regisration</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <div class="row justify-content-md-center">
  <form class="col-6" @submit.prevent="submit">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name"  required v-model="name">
      <div  class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" v-model="email">
      <div  class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" v-model="password">
    </div>
    <div class="mb-3">
      <label for="password_repeat" class="form-label">Password Repeat</label>
      <input type="password" class="form-control" id="password_repeat" v-model="passwordConfirm">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
</template>
<script>
 import {ref} from 'vue';
 import axios from 'axios';
 export default {
   name: 'Register',
   setup() {
     const name = ref('');
     const email = ref('');
     const password = ref('');
     const passwordConfirm = ref('');
     const submit = () => {
      console.log();
      axios.post('http://localhost:8000/api/register/', {
        name:name.value,
        email:email.value,
        password: password.value,
        password_confirm: passwordConfirm.value
      }).then(
          res => {
            console.log(res);
          }
      );
     }
     return {
       name,
       email,
       password,
       passwordConfirm,
       submit
     }
   }
 }
</script>