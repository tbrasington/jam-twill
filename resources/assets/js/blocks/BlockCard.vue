<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image" name="medias.image" > <a17-mediafield :name="fieldName('image')" crop-context="image" >Minimum image width: 1500px</a17-mediafield> </a17-inputframe> <a17-vselect label="Card type" :name="fieldName('fullwidth')" :options='[{&quot;value&quot;:&quot;pullout&quot;,&quot;label&quot;:&quot;Pullout&quot;},{&quot;value&quot;:&quot;half&quot;,&quot;label&quot;:&quot;Half&quot;},{&quot;value&quot;:&quot;full&quot;,&quot;label&quot;:&quot;Full&quot;}]' :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect><a17-textfield label="Title" :name="fieldName('title')" type="text" placeholder="Title of the card" :maxlength="250" in-store="value" ></a17-textfield><a17-textfield label="Short Description" :name="fieldName('short_description')" type="textarea" :maxlength="500" :rows="4" in-store="value" ></a17-textfield><a17-textfield label="URL" :name="fieldName('url')" type="text" placeholder="https://" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
