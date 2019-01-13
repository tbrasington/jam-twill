<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="image" name="medias.image" > <a17-mediafield :name="fieldName('image')" crop-context="image" >Minimum image width 1500px</a17-mediafield> </a17-inputframe>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
