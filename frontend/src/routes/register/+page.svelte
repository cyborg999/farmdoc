<script>
	import axios from 'axios';

	let name = '';
	let email = '';
	let password = '';

	$: formSubmit = async () => {
		const response = await axios.post('http://localhost:8000/api/users', {
			name,
			email,
			password
		});

		console.log(response);
	};
</script>

<form on:submit|preventDefault={formSubmit} method="post">
	<input type="text" bind:value={name} placeholder="Name" />
	<input type="text" bind:value={email} placeholder="Email" />
	<input type="password" bind:value={password} placeholder="Password" />
	<input type="submit" />
</form>
