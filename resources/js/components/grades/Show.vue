<template>
    <div class="row">
        <div class="col-lg-6">
        <div class="card">
        <div class="card-header">
        <h5 class="m-0">Grades</h5>
        </div>
        <div class="card-body">

        <Grades></Grades>
        </div>
        </div>
        </div>

        <div class="col-lg-6">
        <div class="card">
        <div class="card-header">
        <h5 class="m-0">Test</h5>
        </div>
        <form>
        <div class="card-body">
            <slot></slot>
        </div>
        <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
        </div>
        </div>
    </div>

</template>
<script>
export default {
    
}
</script>