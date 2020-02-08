<template>
	<div class="form-group">
    <label class="radio">
        <input type="radio" value="1" v-model="radioButtonValue">
        <span>1</span>
        <input type="radio" value="2" v-model="radioButtonValue">
        <span>2</span>
        <input type="radio" value="3" v-model="radioButtonValue">
        <span>3</span>
    </label>
	</div>
</template>

<script>
	export default{
        data() {
            return {
               radioButtonValue: "1" 
            }
        }

	}

</script>