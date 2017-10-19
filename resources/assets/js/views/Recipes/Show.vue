<template>
    <div class="recipe__show">
        <div class="recipe__row">
            <div class="recipe__image">
                <div class="recipe__box">
                    <img :src="`/images/${recipe.image}`" v-if="recipe.image">
                </div>
            </div>
            <div class="recipe__details">
                <div class="recipe__details_inner">
                    <small>Submited by: {{recipe.user.name}}</small>
                    <h1 class="recipe__title">{{recipe.name}}</h1>
                    <p class="recipe_description">{{recipe.description}}</p>
                    <div v-if="auth.api_token && auth.user_id === recipe.user_id">
                        <router-link :to="`/recipes/${recipe.id}/edit`" class="btn btn__primary" >
                            Edit
                        </router-link>
                        <button class="btn btn__danger" @click="remove" :disabled="isRemoving"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="recipe__row">
            <div class="recipe__box">
                <h3 class="recipe__sub_title">Ingredients</h3>
                <ul>
                    <li v-for="ingredient in ingredients">
                        <span>{{ingredient.name}}</span>
                        <span>{{ingredient.qty</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="recipe__directions">
            <div class="recipe__directions_inner">
                <h3 class="recipe__sub_title">Directions</h3>
                <ul>
                    <li v-for="(directions,i) in recipe.directions">
                        <p>
                            <strong>{{i+1}}</strong>
                            {{direction.description}}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script type="text/javascript">

</script>