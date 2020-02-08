<template>
         <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" :id="name" :name="name" :placeholder="placeholder" :rows="rows"></textarea>
         </div> 

</template>

<script>
export default{
	props : ['name','placeholder','rows']
}

</script>