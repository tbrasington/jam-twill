<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.image" > <a17-mediafield :name="fieldName('image')" crop-context="image" >Minimum image width: 1500px</a17-mediafield> </a17-inputframe><a17-vselect label="FullWidth" :name="fieldName('fullwidth')" :options='[{&quot;value&quot;:true,&quot;label&quot;:&quot;Yes&quot;},{&quot;value&quot;:false,&quot;label&quot;:&quot;No&quot;}]' :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect><a17-textfield label="Title" :name="fieldName('title')" type="text" placeholder="Title of the card" :maxlength="250" in-store="value" ></a17-textfield><a17-textfield label="Short Description" :name="fieldName('short_description')" type="textarea" :maxlength="500" :rows="4" in-store="value" ></a17-textfield><a17-textfield label="URL" :name="fieldName('url')" type="text" placeholder="https://" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
