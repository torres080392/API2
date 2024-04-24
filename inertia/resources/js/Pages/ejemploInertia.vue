<template>
    <form @submit.prevent="submitForm">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input v-model="formData.nombre" type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">Correo Electrónico:</label>
        <input v-model="formData.correo" type="email" class="form-control" id="correo" name="correo" required>
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input v-model="formData.telefono" type="tel" class="form-control" id="telefono" name="telefono" required>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        formData: {
          nombre: '',
          correo: '',
          telefono: ''
        }
      };
    },
    methods: {
      submitForm() {
        // Aquí puedes manejar el envío del formulario
        console.log('Formulario enviado:', this.formData);
        // También puedes hacer una solicitud HTTP para enviar los datos al servidor
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos CSS específicos del componente */
  </style>
  