<template>
    <div>
            <div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" id="weight" placeholder="Weight" v-model='student_data.weight'>
    </div>
    <div class="form-group">
        <label for="height">Height</label>
        <input type="text" class="form-control" id="height" placeholder="Height" v-model='student_data.height'>
    </div>

    <!-- /.card-body -->
    </div>
</template>

<script>
export default {
    

    name : 'StudentData',
    props : ['student_data']
}
</script>