<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.image" > <a17-mediafield :name="fieldName('image')" crop-context="image" >Minimum image width: 1500px</a17-mediafield> </a17-inputframe><a17-vselect label="Column Span" :name="fieldName('columns')" :options='[{&quot;value&quot;:6,&quot;label&quot;:&quot;6&quot;},{&quot;value&quot;:4,&quot;label&quot;:&quot;4&quot;},{&quot;value&quot;:8,&quot;label&quot;:&quot;8&quot;},{&quot;value&quot;:12,&quot;label&quot;:&quot;12&quot;}]' :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
