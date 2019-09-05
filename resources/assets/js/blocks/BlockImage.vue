<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.image" > <a17-mediafield :name="fieldName('image')" crop-context="image" >Minimum image width: 1500px</a17-mediafield> </a17-inputframe> <a17-vselect label="Image Size" :name="fieldName('imageSize')" :options='[{&quot;value&quot;:1,&quot;label&quot;:&quot;Full Bleed&quot;},{&quot;value&quot;:2,&quot;label&quot;:&quot;Inline&quot;}]' placeholder="Select " :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
