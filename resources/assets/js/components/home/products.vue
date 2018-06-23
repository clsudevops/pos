<template>
    <v-container grid-list-md>
        <v-layout row wrap>
            <v-flex xs12>
                <h1 class=" my-3 text-sm-center display-1">Featured Products</h1>
            </v-flex>
            <v-flex v-for="(item, i) in items" :key="i" xs12 sm12 md6>
                <CornerRibbonBox 
                    :item="item"
                />
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import CornerRibbonBox from '../../components/cornerRibbonBox'

export default {
    components: {
        CornerRibbonBox
    },
    data: () =>({
        items: [
				{
					logo:'https://b.zmtcdn.com/data/collections/cd847de634b826a3abb6a8af68de5136_1521103257.jpg?fit=around%7C300%3A250&crop=300%3A250%3B%2A%2C%2A',
					name: 'Taco Mexican',
					description:'No mei nullam tibique. Malis postea assueverit mel cu. Ex timeam diceret numquam pri. Unum option feugiat nec ex, putant dicunt conclusionemque nam no.'
				},
				{
					img:'https://b.zmtcdn.com/data/collections/9159d632f2e465ece2c05e2df796648c_1523864245.jpg?fit=around%7C300%3A250&crop=300%3A250%3B%2A%2C%2A',
					name: 'City',
					description:'No mei nullam tibique. Malis postea assueverit mel cu. Ex timeam diceret numquam pri. Unum option feugiat nec ex, putant dicunt conclusionemque nam no.'
				},
				{
					img:'https://b.zmtcdn.com/data/ads_creatives/a05/ab0aed692824697644489ee21289ba05.jpg?output-format=webp',
					name: 'B&B: Burger and Brewskies',
					description:'No mei nullam tibique. Malis postea assueverit mel cu. Ex timeam diceret numquam pri. Unum option feugiat nec ex, putant dicunt conclusionemque nam no.'
				},
				{
					img:'https://b.zmtcdn.com/data/collections/cd847de634b826a3abb6a8af68de5136_1521103257.jpg?fit=around%7C300%3A250&crop=300%3A250%3B%2A%2C%2A',
					name: 'Taco Mexican',
					description:'No mei nullam tibique. Malis postea assueverit mel cu. Ex timeam diceret numquam pri. Unum option feugiat nec ex, putant dicunt conclusionemque nam no.'
				},
				{
					img:'https://b.zmtcdn.com/data/collections/9159d632f2e465ece2c05e2df796648c_1523864245.jpg?fit=around%7C300%3A250&crop=300%3A250%3B%2A%2C%2A',
					name: 'City',
					description:'No mei nullam tibique. Malis postea assueverit mel cu. Ex timeam diceret numquam pri. Unum option feugiat nec ex, putant dicunt conclusionemque nam no.'
				},
				{
					img:'https://b.zmtcdn.com/data/ads_creatives/a05/ab0aed692824697644489ee21289ba05.jpg?output-format=webp',
					name: 'B&B: Burger and Brewskies',
					description:'No mei nullam tibique. Malis postea assueverit mel cu. Ex timeam diceret numquam pri. Unum option feugiat nec ex, putant dicunt conclusionemque nam no.'
				}
			]
    })
}
</script>

<style>

</style>
