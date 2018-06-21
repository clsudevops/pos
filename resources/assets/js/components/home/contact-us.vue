<template>
    <form>
        <v-layout row wrap>
            <v-flex xs12>
                <v-text-field solo label="Name*" required></v-text-field>
            </v-flex>
            <v-flex xs12>
                <v-text-field solo label="E-mail*" type="email" required></v-text-field>
            </v-flex>
            <v-flex xs12>
                <v-text-field solo label="Phone number*" required></v-text-field>
            </v-flex>
            <v-flex xs12>
                <v-text-field solo multi-line label="Message*" required></v-text-field>
            </v-flex>
            <v-flex xs12>
                <v-btn class="mx-0" color="success">
                    Send Message
                </v-btn>
            </v-flex>
        </v-layout>
    </form>
</template>

<script>
    export default {};
</script>

<style>
</style>