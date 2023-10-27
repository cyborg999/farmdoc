<script>
    import axios, { Axios } from "axios"

    let username = '', password = '', name = ''

    $: formSubmit = async () => {
        let response = await axios.post("http://localhost:8000/api/user/add", {
            name,username,password
        });

        console.log(response)
    }   

</script>
<form on:submit|preventDefault={ formSubmit } method="post">
    <input type="text" bind:value={ name } placeholder="Name">
    <input type="text" bind:value={ username } placeholder="Username">
    <input type="password" bind:value={ password } placeholder="Password">
    <input type="submit">
</form>