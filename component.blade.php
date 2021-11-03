<x-description.description 
  :columns="collect($->first())->keys()" 
  title='Le titre de mon composant description'
  subtitle='Le sous titre mon composant description' 
  :data-tables="collect($->take(1))"
  edit-uri="/dashboard/gallery/" 
/>

<x-table.table 
  :columns="collect($->first())->keys()" 
  crud-uri="/dashboard/gallery/"
  :data-tables="$"
  numberHeadActions=""
/>

<x-form.form action='' method='' title='' subtitle="">

  <x-form.checkbox title="" name="" label="" label-subtitle="" />

  <x-form.select label="" selected="" :options="" />

  <x-form.fa-select label="" selected="" :options="" />

  <x-form.text label="" name="" placeholder="" text="" />

  <x-form.textarea label="" name="" placeholder="" text="" description="" />

  <x-form.upload label="" name="" />

</x-form.form>