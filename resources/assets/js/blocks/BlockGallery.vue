<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Title" :name="fieldName('title')" type="text" placeholder="Title of the gallery" :maxlength="250" in-store="value" ></a17-textfield><a17-vselect label="Gallery Type" :name="fieldName('galleryType')" :options='[{&quot;value&quot;:1,&quot;label&quot;:&quot;Grid&quot;},{&quot;value&quot;:2,&quot;label&quot;:&quot;Inline&quot;}]' placeholder="Select " :has-default-store="true" size="large" in-store="inputValue" > </a17-vselect><a17-inputframe label="Assets" name="medias.gallery" > <a17-slideshow :name="fieldName('gallery')" :max="10" crop-context="gallery" >Minimum image width: 1500px</a17-slideshow> </a17-inputframe>

    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
