// Supabase configuration
const SUPABASE_URL = 'https://uifwtvqgiwuttnanxyvz.supabase.co';
const SUPABASE_ANON_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InVpZnd0dnFnaXd1dHRuYW54eXZ6Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NTMwMDgwNjMsImV4cCI6MjA2ODU4NDA2M30.gok42F8kyYq1Ain5IGFZzElyR-j0_Djlcw2Ea0gd4N0';
const supabase = window.supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

// Sample recipe data as fallback if the database connection fails
const sampleRecipes = [
    {
        id: 1,
        name: "Butter Chicken",
        region: "north",
        diet: "non-veg",
        spice: "mild",
        prepTime: 30,
        cookTime: 45,
        servings: 4,
        image: "https://public.youware.com/users-website-assets/prod/b803843b-b98d-4f40-bc7e-c4e46fc07c86/c144f551f6fa45c592ed5cbc65a016dd.jpg",
        description: "Creamy, rich North Indian curry with tender chicken in a tomato-based sauce.",
        ingredients: [
            "1 lb chicken breast, cut into pieces",
            "2 tbsp ghee or butter",
            "1 large onion, diced",
            "3 cloves garlic, minced",
            "1 inch ginger, grated",
            "1 can (14 oz) crushed tomatoes",
            "1/2 cup heavy cream",
            "2 tsp garam masala",
            "1 tsp cumin powder",
            "1 tsp coriander powder",
            "1/2 tsp turmeric",
            "Salt to taste",
            "Fresh cilantro for garnish"
        ],
        instructions: [
            "Heat ghee in a large pan over medium heat. Add onions and cook until golden brown, about 8-10 minutes.",
            "Add garlic and ginger, cook for 1 minute until fragrant.",
            "Add chicken pieces and cook until browned on all sides, about 5-7 minutes.",
            "Add all spices and cook for 1 minute, stirring constantly.",
            "Add crushed tomatoes and simmer for 15 minutes until sauce thickens.",
            "Stir in heavy cream and simmer for 5 more minutes.",
            "Season with salt and garnish with fresh cilantro before serving."
        ],
        rating: 4.8,
        reviews: 234,
        story: "This recipe has been passed down through three generations in my family. My grandmother learned it from a royal chef in Delhi during the 1940s."
    },
    {
        id: 2,
        name: "Sambar",
        region: "south",
        diet: "vegetarian",
        spice: "medium",
        prepTime: 20,
        cookTime: 40,
        servings: 6,
        image: "https://public.youware.com/users-website-assets/prod/b803843b-b98d-4f40-bc7e-c4e46fc07c86/82bfd353a89c4414ab298c28b68eb064.jpg",
        description: "Traditional South Indian lentil curry with vegetables and aromatic spices.",
        ingredients: [
            "1 cup toor dal (pigeon pea lentils)",
            "2 cups mixed vegetables (drumstick, okra, eggplant)",
            "2 tbsp sambar powder",
            "1 tsp turmeric powder",
            "2 tbsp tamarind paste",
            "1 tbsp coconut oil",
            "1 tsp mustard seeds",
            "1 tsp cumin seeds",
            "2 dried red chilies",
            "10-12 curry leaves",
            "2 shallots, sliced",
            "Salt to taste"
        ],
        instructions: [
            "Cook toor dal with turmeric until soft and mushy. Mash well and set aside.",
            "In a large pot, cook mixed vegetables with sambar powder and salt until tender.",
            "Add the cooked dal and tamarind paste. Simmer for 10 minutes.",
            "Heat coconut oil in a small pan. Add mustard seeds, cumin seeds, and red chilies.",
            "When seeds splutter, add curry leaves and sliced shallots. Fry until golden.",
            "Pour this tempering over the sambar and simmer for 5 more minutes.",
            "Adjust consistency with water if needed and serve hot with rice."
        ],
        rating: 4.6,
        reviews: 189,
        story: "Every Sunday morning in our home meant fresh sambar. The aroma would wake up the entire household and bring everyone to the kitchen."
    },
    {
        id: 3,
        name: "Fish Curry (Bengali Style)",
        region: "east",
        diet: "non-veg",
        spice: "medium",
        prepTime: 25,
        cookTime: 30,
        servings: 4,
        image: "https://public.youware.com/users-website-assets/prod/b803843b-b98d-4f40-bc7e-c4e46fc07c86/a1bd12a867c24ca08f6db285fed57b0d.jpg",
        description: "Delicate Bengali fish curry with mustard oil and traditional five-spice blend.",
        ingredients: [
            "1 lb fish fillets (rohu or carp), cut into pieces",
            "3 tbsp mustard oil",
            "1 tsp panch phoron (five-spice blend)",
            "2 bay leaves",
            "1 large onion, sliced",
            "2 tomatoes, chopped",
            "1 tsp ginger-garlic paste",
            "1 tsp turmeric powder",
            "1 tsp red chili powder",
            "1 tsp cumin powder",
            "Salt to taste",
            "Fresh green chilies",
            "Cilantro for garnish"
        ],
        instructions: [
            "Marinate fish pieces with turmeric and salt. Set aside for 15 minutes.",
            "Heat mustard oil in a heavy-bottomed pan until smoking. Let it cool slightly.",
            "Fry the fish pieces until golden brown on both sides. Remove and set aside.",
            "In the same oil, add panch phoron and bay leaves. Let them splutter.",
            "Add sliced onions and cook until translucent.",
            "Add ginger-garlic paste, chopped tomatoes, and all spices. Cook until tomatoes break down.",
            "Add 1 cup water and bring to a boil. Gently add the fried fish pieces.",
            "Simmer for 10 minutes until the gravy thickens. Garnish with cilantro and green chilies."
        ],
        rating: 4.7,
        reviews: 156,
        story: "Growing up near the Ganges, fresh fish curry was a daily staple. This recipe captures the essence of Bengali home cooking."
    },
    {
        id: 4,
        name: "Punjabi Chole",
        region: "north",
        diet: "vegetarian",
        spice: "medium",
        prepTime: 15,
        cookTime: 60,
        servings: 6,
        image: "https://public.youware.com/users-website-assets/prod/b803843b-b98d-4f40-bc7e-c4e46fc07c86/82bfd353a89c4414ab298c28b68eb064.jpg",
        description: "Spicy chickpea curry from Punjab, perfect with bhature or rice.",
        ingredients: [
            "2 cups dried chickpeas, soaked overnight",
            "2 tbsp ghee",
            "2 bay leaves",
            "1 inch cinnamon stick",
            "2 large onions, finely chopped",
            "4 tomatoes, pureed",
            "1 tbsp ginger-garlic paste",
            "2 tsp chole masala powder",
            "1 tsp cumin powder",
            "1 tsp coriander powder",
            "1/2 tsp red chili powder",
            "1/2 tsp turmeric",
            "Salt to taste",
            "Fresh ginger julienne",
            "Cilantro for garnish"
        ],
        instructions: [
            "Pressure cook soaked chickpeas with salt until tender. Reserve the cooking liquid.",
            "Heat ghee in a large pan. Add bay leaves and cinnamon stick.",
            "Add chopped onions and cook until deep golden brown.",
            "Add ginger-garlic paste and cook for 2 minutes.",
            "Add tomato puree and all spices. Cook until oil separates.",
            "Add cooked chickpeas along with some cooking liquid.",
            "Simmer for 20-25 minutes until the gravy thickens.",
            "Mash some chickpeas to thicken the curry. Garnish with ginger and cilantro."
        ],
        rating: 4.5,
        reviews: 278,
        story: "This recipe comes from my mother-in-law who learned it in a Punjabi household. The secret is in the long, slow cooking process."
    },
    {
        id: 5,
        name: "Coconut Fish Curry (Kerala Style)",
        region: "south",
        diet: "non-veg",
        spice: "hot",
        prepTime: 20,
        cookTime: 25,
        servings: 4,
        image: "https://public.youware.com/users-website-assets/prod/b803843b-b98d-4f40-bc7e-c4e46fc07c86/c144f551f6fa45c592ed5cbc65a016dd.jpg",
        description: "Spicy Kerala fish curry with coconut milk and curry leaves.",
        ingredients: [
            "1 lb fish fillets (kingfish or mackerel)",
            "1 cup thick coconut milk",
            "1/2 cup thin coconut milk",
            "2 tbsp coconut oil",
            "1 sprig curry leaves",
            "2 green chilies, slit",
            "1 inch ginger, julienned",
            "2 shallots, sliced",
            "2 tomatoes, cut into wedges",
            "1 tbsp fish curry powder",
            "1/2 tsp turmeric powder",
            "1 tsp tamarind paste",
            "Salt to taste"
        ],
        instructions: [
            "Marinate fish with turmeric and salt. Set aside for 10 minutes.",
            "Heat coconut oil in a clay pot or heavy-bottomed pan.",
            "Add curry leaves, green chilies, ginger, and shallots. Sauté until fragrant.",
            "Add tomato wedges and cook until softened.",
            "Add fish curry powder, turmeric, and tamarind paste. Mix well.",
            "Pour in thin coconut milk and bring to a gentle boil.",
            "Add fish pieces and cook for 8-10 minutes until fish is done.",
            "Finish with thick coconut milk and simmer for 2 minutes. Do not boil after adding thick coconut milk."
        ],
        rating: 4.9,
        reviews: 123,
        story: "This is my grandmother's recipe from the backwaters of Kerala. She would catch fish fresh from the river and cook it the same day."
    },
    {
        id: 6,
        name: "Palak Paneer",
        region: "north",
        diet: "vegetarian",
        spice: "mild",
        prepTime: 25,
        cookTime: 20,
        servings: 4,
        image: "https://public.youware.com/users-website-assets/prod/b803843b-b98d-4f40-bc7e-c4e46fc07c86/a1bd12a867c24ca08f6db285fed57b0d.jpg",
        description: "Creamy spinach curry with cubes of fresh paneer cheese.",
        ingredients: [
            "500g fresh spinach leaves",
            "250g paneer, cubed",
            "2 tbsp ghee",
            "1 large onion, chopped",
            "3 cloves garlic",
            "1 inch ginger",
            "2 green chilies",
            "1 tomato, chopped",
            "1/2 cup heavy cream",
            "1 tsp cumin seeds",
            "1 tsp garam masala",
            "1/2 tsp turmeric",
            "Salt to taste"
        ],
        instructions: [
            "Blanch spinach leaves in boiling water for 2 minutes. Cool and blend to a smooth puree.",
            "Heat ghee in a pan and lightly fry paneer cubes until golden. Set aside.",
            "In the same pan, add cumin seeds and let them splutter.",
            "Add chopped onion and cook until golden brown.",
            "Add ginger-garlic-green chili paste and cook for 1 minute.",
            "Add chopped tomato and cook until soft.",
            "Add turmeric and garam masala. Cook for 30 seconds.",
            "Add spinach puree and cook for 5 minutes.",
            "Add paneer cubes and cream. Simmer for 5 minutes and serve hot."
        ],
        rating: 4.4,
        reviews: 195,
        story: "My kids refused to eat spinach until I made this dish. Now it's their favorite way to have greens!"
    }
];

// Current filtered recipes
let allRecipes = [];
let currentRecipes = [];
let displayedRecipes = 0;
const recipesPerPage = 6;

// User session for favorites (in production, this would be a proper user ID)
let userSession = localStorage.getItem('userSession') || generateUserSession();

// Generate a unique session ID for the user
function generateUserSession() {
    const session = 'user_' + Math.random().toString(36).substr(2, 9) + '_' + Date.now();
    localStorage.setItem('userSession', session);
    return session;
}

// Store user's favorite recipe IDs
let userFavorites = new Set();

// DOM elements
const recipeGrid = document.getElementById('recipe-grid');
const recipeModal = document.getElementById('recipe-modal');
const modalBody = document.getElementById('modal-body');

// Initialize the application
document.addEventListener('DOMContentLoaded', async function() {
    // Add slide-up animation to sections
    document.querySelectorAll('section').forEach((section, index) => {
        section.classList.add('fade-in');
        section.style.animationDelay = `${index * 0.2}s`;
    });
    
    // Initialize mobile navigation
    initializeMobileNav();
    
    // Load user favorites first
    await loadUserFavorites();
    
    // Load recipes from Supabase
    await loadRecipesFromSupabase();
    
    // Display initial recipes
    displayRecipes();
    
    // Setup scroll animations
    setupScrollAnimations();
});

// Load recipes from Supabase
async function loadRecipesFromSupabase() {
    try {
        // Show loading state
        recipeGrid.innerHTML = '<div class="loading">Loading recipes...</div>';
        
        // Fetch recipes from Supabase
        const { data: recipes, error } = await supabase
            .from('recipes')
            .select('*');
            
        if (error) {
            console.error('Error fetching recipes:', error);
            // Fallback to sample data if there's an error
            allRecipes = [...sampleRecipes];
            currentRecipes = [...sampleRecipes];
            return;
        }
        
        // Format the recipes data to match our expected structure
        if (recipes && recipes.length > 0) {
            // Fetch ratings for each recipe
            const { data: recipeRatings, error: ratingsError } = await supabase
                .from('recipe_ratings')
                .select('*');
                
            if (ratingsError) {
                console.error('Error fetching ratings:', ratingsError);
            }
            
            // Map recipe data to our format and add ratings
            allRecipes = recipes.map(recipe => {
                const rating = recipeRatings?.find(r => r.recipe_id === recipe.id);
                return {
                    id: recipe.id,
                    name: recipe.name,
                    region: recipe.region,
                    diet: recipe.diet,
                    spice: recipe.spice,
                    prepTime: recipe.prep_time,
                    cookTime: recipe.cook_time,
                    servings: recipe.servings,
                    image: recipe.image,
                    description: recipe.description,
                    ingredients: recipe.ingredients,
                    instructions: recipe.instructions,
                    story: recipe.story,
                    rating: rating ? parseFloat(rating.avg_rating) : 0,
                    reviews: rating ? parseInt(rating.total_ratings) : 0
                };
            });
            
            // Set current recipes to all recipes initially
            currentRecipes = [...allRecipes];
        } else {
            // Fallback to sample data if no recipes were returned
            allRecipes = [...sampleRecipes];
            currentRecipes = [...sampleRecipes];
        }
    } catch (error) {
        console.error('Unexpected error loading recipes:', error);
        // Fallback to sample data
        allRecipes = [...sampleRecipes];
        currentRecipes = [...sampleRecipes];
    } finally {
        // Clear loading state
        recipeGrid.innerHTML = '';
    }
}

// Display recipes in the grid
function displayRecipes() {
    const recipesToShow = currentRecipes.slice(displayedRecipes, displayedRecipes + recipesPerPage);
    
    recipesToShow.forEach(recipe => {
        const recipeCard = createRecipeCard(recipe);
        recipeGrid.appendChild(recipeCard);
    });
    
    displayedRecipes += recipesToShow.length;
    
    // Hide load more button if all recipes are displayed
    const loadMoreBtn = document.querySelector('.load-more');
    if (displayedRecipes >= currentRecipes.length) {
        loadMoreBtn.style.display = 'none';
    } else {
        loadMoreBtn.style.display = 'block';
    }
}

// Create a recipe card element
function createRecipeCard(recipe) {
    const card = document.createElement('div');
    card.className = 'recipe-card fade-in';
    
    const spiceIcons = '🌶️'.repeat(getSpiceLevel(recipe.spice));
    const isFavorite = userFavorites.has(recipe.id);
    
    card.innerHTML = `
        <div class="recipe-image-wrapper">
            <img src="${recipe.image}" alt="${recipe.name}" class="recipe-image" loading="lazy">
            <div class="recipe-actions">
                <button class="btn-favorite ${isFavorite ? 'active' : ''}" onclick="toggleFavorite(${recipe.id}, event)" 
                        title="${isFavorite ? 'Remove from favorites' : 'Add to favorites'}">
                    <i class="fas fa-heart"></i>
                </button>
                <button class="btn-share" onclick="shareRecipe(${recipe.id}, event)" title="Share recipe">
                    <i class="fas fa-share-alt"></i>
                </button>
            </div>
        </div>
        <div class="recipe-content" onclick="openRecipeModal(${recipe.id})">
            <h4 class="recipe-title">${recipe.name}</h4>
            <div class="recipe-meta">
                <span><i class="fas fa-clock"></i> ${recipe.prepTime + recipe.cookTime} min</span>
                <span><i class="fas fa-users"></i> ${recipe.servings} servings</span>
                <span><i class="fas fa-pepper-hot"></i> ${spiceIcons}</span>
            </div>
            <p class="recipe-description">${recipe.description}</p>
            <div class="recipe-tags">
                <span class="tag region">${formatRegion(recipe.region)}</span>
                <span class="tag diet">${formatDiet(recipe.diet)}</span>
                <span class="tag spice">${recipe.spice.charAt(0).toUpperCase() + recipe.spice.slice(1)} Spice</span>
            </div>
            <div class="rating">
                <span class="stars">${'★'.repeat(Math.floor(recipe.rating))}☆</span>
                <span>${recipe.rating} (${recipe.reviews} reviews)</span>
            </div>
        </div>
    `;
    
    // Add staggered animation delay
    const index = document.querySelectorAll('.recipe-card').length;
    card.style.animationDelay = `${index * 0.1}s`;
    
    return card;
}

// Get spice level number for icons
function getSpiceLevel(spice) {
    const levels = { 'mild': 1, 'medium': 2, 'hot': 3, 'very-hot': 4 };
    return levels[spice] || 1;
}

// Format region display
function formatRegion(region) {
    const regions = {
        'north': 'North Indian',
        'south': 'South Indian',
        'east': 'East Indian',
        'west': 'West Indian',
        'central': 'Central Indian'
    };
    return regions[region] || region;
}

// Format diet display
function formatDiet(diet) {
    const diets = {
        'vegetarian': 'Vegetarian',
        'vegan': 'Vegan',
        'non-veg': 'Non-Vegetarian',
        'gluten-free': 'Gluten-Free'
    };
    return diets[diet] || diet;
}

// Apply filters to recipes
function applyFilters() {
    const regionFilter = document.getElementById('region-filter').value;
    const dietFilter = document.getElementById('diet-filter').value;
    const spiceFilter = document.getElementById('spice-filter').value;
    
    currentRecipes = allRecipes.filter(recipe => {
        return (!regionFilter || recipe.region === regionFilter) &&
               (!dietFilter || recipe.diet === dietFilter) &&
               (!spiceFilter || recipe.spice === spiceFilter);
    });
    
    // Reset display
    recipeGrid.innerHTML = '';
    displayedRecipes = 0;
    displayRecipes();
    
    // Scroll to results
    document.getElementById('recipes').scrollIntoView({ behavior: 'smooth' });
}

// Load more recipes
function loadMoreRecipes() {
    displayRecipes();
}

// Open recipe modal
async function openRecipeModal(recipeId) {
    const recipe = allRecipes.find(r => r.id === recipeId);
    if (!recipe) return;
    const spiceIcons = '🌶️'.repeat(getSpiceLevel(recipe.spice));
    
    // Show loading state in modal
    modalBody.innerHTML = '<div class="loading">Loading recipe details...</div>';
    recipeModal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    
    // Add animation classes after a short delay
    setTimeout(() => {
        recipeModal.classList.add('show');
    }, 10);
    
    try {
        // Fetch reviews for this recipe from Supabase
        const { data: reviews, error: reviewError } = await supabase
            .from('reviews')
            .select('*')
            .eq('recipe_id', recipe.id)
            .order('created_at', { ascending: false });
            
        if (reviewError) {
            console.error('Error fetching reviews:', reviewError);
        }
        
        // Build the modal content
        const isFavorite = userFavorites.has(recipe.id);
        modalBody.innerHTML = `
            <div class="modal-header">
                <img src="${recipe.image}" alt="${recipe.name}" class="modal-recipe-image">
                <div class="modal-actions">
                    <button class="btn-favorite ${isFavorite ? 'active' : ''}" onclick="toggleFavorite(${recipe.id}, event)" 
                            title="${isFavorite ? 'Remove from favorites' : 'Add to favorites'}">
                        <i class="fas fa-heart"></i>
                        <span>${isFavorite ? 'Favorited' : 'Add to Favorites'}</span>
                    </button>
                    <button class="btn-share" onclick="shareRecipe(${recipe.id}, event)" title="Share recipe">
                        <i class="fas fa-share-alt"></i>
                        <span>Share</span>
                    </button>
                </div>
            </div>
            <h2 class="modal-recipe-title">${recipe.name}</h2>
            
            <div class="modal-recipe-meta">
                <div class="meta-item">
                    <span class="meta-label"><i class="fas fa-map-marker-alt"></i> Region</span>
                    <span class="meta-value">${formatRegion(recipe.region)}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label"><i class="fas fa-utensils"></i> Diet</span>
                    <span class="meta-value">${formatDiet(recipe.diet)}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label"><i class="fas fa-pepper-hot"></i> Spice Level</span>
                    <span class="meta-value">${spiceIcons}</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label"><i class="fas fa-clock"></i> Prep Time</span>
                    <span class="meta-value">${recipe.prepTime} min</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label"><i class="fas fa-fire"></i> Cook Time</span>
                    <span class="meta-value">${recipe.cookTime} min</span>
                </div>
                <div class="meta-item">
                    <span class="meta-label"><i class="fas fa-users"></i> Servings</span>
                    <span class="meta-value">${recipe.servings}</span>
                </div>
            </div>
            
            <div class="rating-section">
                <div class="current-rating">
                    <span class="stars">${'★'.repeat(Math.floor(recipe.rating))}${'☆'.repeat(5 - Math.floor(recipe.rating))}</span>
                    <span>${recipe.rating.toFixed(1)} (${recipe.reviews} reviews)</span>
                </div>
                <div class="user-rating">
                    <h4>Rate this recipe:</h4>
                    <div class="star-rating" data-recipe-id="${recipe.id}">
                        <i class="fas fa-star" data-rating="1"></i>
                        <i class="fas fa-star" data-rating="2"></i>
                        <i class="fas fa-star" data-rating="3"></i>
                        <i class="fas fa-star" data-rating="4"></i>
                        <i class="fas fa-star" data-rating="5"></i>
                    </div>
                    <button class="btn btn-sm btn-primary" id="submit-rating" style="margin-top: 10px; display: none;">Submit Rating</button>
                </div>
            </div>
            
            ${recipe.story ? `
                <div class="story-section">
                    <h3 class="section-title">Story Behind the Recipe</h3>
                    <p style="font-style: italic; color: var(--color-text-light); margin-bottom: var(--spacing-lg);">${recipe.story}</p>
                </div>
            ` : ''}
            
            <div class="ingredients-section">
                <h3 class="section-title">Ingredients</h3>
                <ul class="ingredients-list">
                    ${recipe.ingredients.map(ingredient => `<li>${ingredient}</li>`).join('')}
                </ul>
            </div>
            
            <div class="instructions-section">
                <h3 class="section-title">Instructions</h3>
                <ol class="instructions-list">
                    ${recipe.instructions.map(instruction => `<li>${instruction}</li>`).join('')}
                </ol>
            </div>
            
            <div class="reviews-section">
                <h3 class="section-title">Reviews & Comments</h3>
                <div class="add-review">
                    <h4>Share your experience:</h4>
                    <form class="review-form" data-recipe-id="${recipe.id}">
                        <div class="form-group">
                            <input type="text" placeholder="Your name" class="form-input" id="reviewer-name" required>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Write your review..." class="form-textarea" id="review-text" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Your rating:</label>
                            <div class="review-star-rating">
                                <i class="fas fa-star" data-rating="1"></i>
                                <i class="fas fa-star" data-rating="2"></i>
                                <i class="fas fa-star" data-rating="3"></i>
                                <i class="fas fa-star" data-rating="4"></i>
                                <i class="fas fa-star" data-rating="5"></i>
                            </div>
                            <input type="hidden" id="review-rating" value="5">
                        </div>
                        <button type="submit" class="btn btn-primary">Post Review</button>
                    </form>
                </div>
                <div class="reviews-list" id="reviews-list-${recipe.id}">
                    ${reviews && reviews.length > 0 ? 
                        reviews.map(review => `
                            <div class="review-item">
                                <div class="review-header">
                                    <span class="reviewer-name">${review.name}</span>
                                    <span class="review-rating">${'★'.repeat(review.rating)}${'☆'.repeat(5 - review.rating)}</span>
                                </div>
                                <p class="review-text">${review.review}</p>
                                <span class="review-date">${formatDate(review.created_at)}</span>
                            </div>
                        `).join('') 
                        : '<div class="no-reviews">Be the first to review this recipe!</div>'
                    }
                </div>
            </div>
            
            <div style="margin-top: var(--spacing-xl); padding: var(--spacing-md); background: var(--color-background-alt); border-radius: var(--border-radius-md); text-align: center; border-left: 4px solid var(--color-accent);">
                <p><strong><i class="fas fa-lightbulb"></i> Chef's Tip:</strong> For best results, let the curry rest for 10-15 minutes before serving to allow flavors to meld together.</p>
            </div>
        `;
        
        // Initialize rating and review functionality
        initializeRatingSystem();
        initializeReviewSystem(recipe.id);
        
    } catch (error) {
        console.error('Error loading recipe details:', error);
        modalBody.innerHTML = `
            <div class="error-message">
                <p>Sorry, there was an error loading recipe details. Please try again later.</p>
                <button class="btn btn-primary" onclick="closeModal()">Close</button>
            </div>
        `;
    }
}

// Format date for reviews
function formatDate(dateString) {
    const date = new Date(dateString);
    const now = new Date();
    const diffTime = Math.abs(now - date);
    const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24));
    
    if (diffDays === 0) {
        return 'Today';
    } else if (diffDays === 1) {
        return 'Yesterday';
    } else if (diffDays < 7) {
        return `${diffDays} days ago`;
    } else if (diffDays < 30) {
        return `${Math.floor(diffDays / 7)} weeks ago`;
    } else if (diffDays < 365) {
        return `${Math.floor(diffDays / 30)} months ago`;
    } else {
        return `${Math.floor(diffDays / 365)} years ago`;
    }
}

// Close recipe modal
function closeModal() {
    recipeModal.classList.remove('show');
    
    // Wait for the animation to complete before hiding the modal
    setTimeout(() => {
        recipeModal.style.display = 'none';
        document.body.style.overflow = 'auto';
    }, 300);
}

// Close modal when clicking outside or pressing Escape
window.onclick = function(event) {
    if (event.target === recipeModal) {
        closeModal();
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape' && recipeModal.style.display === 'block') {
        closeModal();
    }
});



// Smooth scrolling functions
function scrollToRecipes() {
    document.getElementById('recipes').scrollIntoView({ behavior: 'smooth' });
}

// Search functionality (can be expanded)
function searchRecipes(query) {
    const searchTerm = query.toLowerCase();
    currentRecipes = sampleRecipes.filter(recipe => 
        recipe.name.toLowerCase().includes(searchTerm) ||
        recipe.description.toLowerCase().includes(searchTerm) ||
        recipe.ingredients.some(ingredient => ingredient.toLowerCase().includes(searchTerm))
    );
    
    recipeGrid.innerHTML = '';
    displayedRecipes = 0;
    displayRecipes();
}

// Generate sample reviews for demonstration
function generateSampleReviews(recipeId) {
    const sampleReviews = [
        { name: "Priya S.", review: "Absolutely delicious! My family loved it. The spice level was perfect.", rating: 5 },
        { name: "Rajesh M.", review: "Easy to follow recipe. Turned out great on my first try!", rating: 4 },
        { name: "Sarah L.", review: "Authentic flavors! Reminds me of my grandmother's cooking.", rating: 5 }
    ];
    
    return sampleReviews.map(review => `
        <div class="review-item">
            <div class="review-header">
                <span class="reviewer-name">${review.name}</span>
                <span class="review-rating">${'★'.repeat(review.rating)}${'☆'.repeat(5-review.rating)}</span>
            </div>
            <p class="review-text">${review.review}</p>
            <span class="review-date">2 days ago</span>
        </div>
    `).join('');
}

// Initialize rating system
function initializeRatingSystem() {
    const starRating = document.querySelector('.star-rating');
    if (!starRating) return;
    
    const stars = starRating.querySelectorAll('.fa-star');
    const submitBtn = document.getElementById('submit-rating');
    let selectedRating = 0;
    const recipeId = starRating.dataset.recipeId;
    
    stars.forEach(star => {
        star.addEventListener('mouseenter', function() {
            const rating = parseInt(this.dataset.rating);
            highlightStars(stars, rating);
        });
        
        star.addEventListener('click', function() {
            selectedRating = parseInt(this.dataset.rating);
            highlightStars(stars, selectedRating);
            submitBtn.style.display = 'inline-block';
        });
    });
    
    starRating.addEventListener('mouseleave', function() {
        highlightStars(stars, selectedRating);
    });
    
    submitBtn.addEventListener('click', async function() {
        if (selectedRating > 0) {
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;
            
            try {
                // Insert the rating into Supabase
                const { data, error } = await supabase
                    .from('ratings')
                    .insert([
                        { recipe_id: recipeId, rating: selectedRating }
                    ]);
                    
                if (error) {
                    console.error('Error submitting rating:', error);
                    alert('Error submitting rating. Please try again later.');
                    submitBtn.textContent = 'Submit Rating';
                    submitBtn.disabled = false;
                    return;
                }
                
                alert(`Thank you for rating this recipe ${selectedRating} stars!`);
                submitBtn.style.display = 'none';
                submitBtn.textContent = 'Rating Submitted';
                submitBtn.disabled = true;
            } catch (error) {
                console.error('Unexpected error submitting rating:', error);
                alert('An unexpected error occurred. Please try again later.');
                submitBtn.textContent = 'Submit Rating';
                submitBtn.disabled = false;
            }
        }
    });
}

// Highlight stars based on rating
function highlightStars(stars, rating) {
    stars.forEach((star, index) => {
        if (index < rating) {
            star.style.color = '#FFD700';
        } else {
            star.style.color = '#ddd';
        }
    });
}

// Initialize review system
function initializeReviewSystem(recipeId) {
    const reviewForm = document.querySelector('.review-form');
    if (!reviewForm) return;
    
    // Initialize the review rating stars
    const reviewStars = document.querySelector('.review-star-rating');
    if (reviewStars) {
        const stars = reviewStars.querySelectorAll('.fa-star');
        const ratingInput = document.getElementById('review-rating');
        let selectedRating = 5; // Default rating
        
        // Highlight all stars initially
        highlightStars(stars, selectedRating);
        
        stars.forEach(star => {
            star.addEventListener('mouseenter', function() {
                const rating = parseInt(this.dataset.rating);
                highlightStars(stars, rating);
            });
            
            star.addEventListener('click', function() {
                selectedRating = parseInt(this.dataset.rating);
                highlightStars(stars, selectedRating);
                ratingInput.value = selectedRating;
            });
        });
        
        reviewStars.addEventListener('mouseleave', function() {
            highlightStars(stars, selectedRating);
        });
    }
    
    reviewForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const name = document.getElementById('reviewer-name').value;
        const reviewText = document.getElementById('review-text').value;
        const rating = parseInt(document.getElementById('review-rating').value);
        
        if (name && reviewText && rating) {
            // Disable submit button and show loading state
            const submitBtn = this.querySelector('button[type="submit"]');
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;
            
            try {
                // Insert the review into Supabase
                const { data, error } = await supabase
                    .from('reviews')
                    .insert([
                        { 
                            recipe_id: recipeId,
                            name: name,
                            review: reviewText,
                            rating: rating
                        }
                    ]);
                    
                if (error) {
                    console.error('Error submitting review:', error);
                    alert('Error submitting review. Please try again later.');
                    submitBtn.textContent = 'Post Review';
                    submitBtn.disabled = false;
                    return;
                }
                
                // Add the new review to the list
                addNewReview(recipeId, name, reviewText, rating);
                this.reset();
                
                // Reset the form and update UI
                submitBtn.textContent = 'Post Review';
                submitBtn.disabled = false;
                
                // Reset rating stars to default (5)
                if (reviewStars) {
                    highlightStars(reviewStars.querySelectorAll('.fa-star'), 5);
                    document.getElementById('review-rating').value = 5;
                }
                
            } catch (error) {
                console.error('Unexpected error submitting review:', error);
                alert('An unexpected error occurred. Please try again later.');
                submitBtn.textContent = 'Post Review';
                submitBtn.disabled = false;
            }
        }
    });
}

// Add new review to the list
function addNewReview(recipeId, name, reviewText, rating) {
    const reviewsList = document.getElementById(`reviews-list-${recipeId}`);
    if (!reviewsList) return;
    
    // Remove "no reviews" message if it exists
    const noReviews = reviewsList.querySelector('.no-reviews');
    if (noReviews) {
        noReviews.remove();
    }
    
    const newReview = document.createElement('div');
    newReview.className = 'review-item new-review';
    newReview.innerHTML = `
        <div class="review-header">
            <span class="reviewer-name">${name}</span>
            <span class="review-rating">${'★'.repeat(rating)}${'☆'.repeat(5 - rating)}</span>
        </div>
        <p class="review-text">${reviewText}</p>
        <span class="review-date">Just now</span>
    `;
    
    reviewsList.insertBefore(newReview, reviewsList.firstChild);
    
    // Add animation
    newReview.style.opacity = '0';
    newReview.style.transform = 'translateY(-20px)';
    setTimeout(() => {
        newReview.style.transition = 'all 0.3s ease';
        newReview.style.opacity = '1';
        newReview.style.transform = 'translateY(0)';
    }, 100);
    
    alert('Thank you for your review!');
}

// Mobile navigation toggle
function initializeMobileNav() {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (navToggle && navMenu) {
        // Ensure menu starts closed
        navToggle.classList.remove('active');
        navMenu.classList.remove('active');
        
        // Remove any existing event listeners to prevent duplicates
        navToggle.removeEventListener('click', toggleMenu);
        navToggle.addEventListener('click', toggleMenu);
        
        // Close menu when clicking on a link
        navMenu.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                closeMenu();
            }
        });
        
        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });
    }
}

function toggleMenu() {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    navToggle.classList.toggle('active');
    navMenu.classList.toggle('active');
}

function closeMenu() {
    const navToggle = document.querySelector('.nav-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    navToggle.classList.remove('active');
    navMenu.classList.remove('active');
}

// Setup scroll animations
function setupScrollAnimations() {
    // Note: Mobile navigation is already initialized in DOMContentLoaded
    
    // Intersection Observer for fade-in effects on scroll
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    // Observe elements with animation classes
    document.querySelectorAll('.recipe-card, .hero-content, .hero-image, .filter-grid').forEach(el => {
        observer.observe(el);
    });
    
    // Add subtle parallax effect to hero section
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        const heroImage = document.querySelector('.hero-image img');
        if (heroImage) {
            heroImage.style.transform = `perspective(1000px) rotateY(-5deg) translateY(${scrollPosition * 0.05}px)`;
        }
    });
}

// Keyboard navigation for accessibility
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && recipeModal.style.display === 'block') {
        closeModal();
    }
});

// Add some sample recipes on page load for demonstration
window.addEventListener('load', function() {
    // This simulates recipes being loaded from a database
    console.log(`Loaded ${sampleRecipes.length} recipes from the database`);
    
    // Add button hover animations
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        button.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
});

// Load user favorites from database
async function loadUserFavorites() {
    try {
        const { data: favorites, error } = await supabase
            .from('favorites')
            .select('recipe_id')
            .eq('user_session', userSession);
            
        if (error) {
            console.error('Error loading favorites:', error);
            return;
        }
        
        // Update userFavorites set with recipe IDs
        userFavorites.clear();
        if (favorites) {
            favorites.forEach(fav => userFavorites.add(fav.recipe_id));
        }
    } catch (error) {
        console.error('Unexpected error loading favorites:', error);
    }
}

// Toggle favorite status
async function toggleFavorite(recipeId, event) {
    event.preventDefault();
    event.stopPropagation();
    
    const isFavorite = userFavorites.has(recipeId);
    
    try {
        if (isFavorite) {
            // Remove from favorites
            const { error } = await supabase
                .from('favorites')
                .delete()
                .eq('recipe_id', recipeId)
                .eq('user_session', userSession);
                
            if (error) {
                console.error('Error removing favorite:', error);
                return;
            }
            
            userFavorites.delete(recipeId);
        } else {
            // Add to favorites
            const { error } = await supabase
                .from('favorites')
                .insert([
                    { recipe_id: recipeId, user_session: userSession }
                ]);
                
            if (error) {
                console.error('Error adding favorite:', error);
                return;
            }
            
            userFavorites.add(recipeId);
        }
        
        // Update UI for all favorite buttons for this recipe
        updateFavoriteButtons(recipeId);
        
        // Show feedback
        showToast(isFavorite ? 'Removed from favorites' : 'Added to favorites');
        
    } catch (error) {
        console.error('Unexpected error toggling favorite:', error);
        showToast('Error updating favorites');
    }
}

// Update favorite button states for a recipe
function updateFavoriteButtons(recipeId) {
    const isFavorite = userFavorites.has(recipeId);
    const favoriteButtons = document.querySelectorAll(`.btn-favorite[onclick*="${recipeId}"]`);
    
    favoriteButtons.forEach(btn => {
        if (isFavorite) {
            btn.classList.add('active');
            btn.setAttribute('title', 'Remove from favorites');
            const span = btn.querySelector('span');
            if (span) span.textContent = 'Favorited';
        } else {
            btn.classList.remove('active');
            btn.setAttribute('title', 'Add to favorites');
            const span = btn.querySelector('span');
            if (span) span.textContent = 'Add to Favorites';
        }
    });
}

// Share recipe functionality
async function shareRecipe(recipeId, event) {
    event.preventDefault();
    event.stopPropagation();
    
    const recipe = allRecipes.find(r => r.id === recipeId);
    if (!recipe) return;
    
    const shareData = {
        title: `${recipe.name} - Let's Cook Curry`,
        text: `Check out this delicious ${recipe.name} recipe! ${recipe.description}`,
        url: window.location.href + `#recipe-${recipeId}`
    };
    
    // Check if Web Share API is supported and allowed
    const canShare = navigator.share && navigator.canShare && navigator.canShare(shareData);
    
    try {
        // Try native sharing only if it's supported and we can share this data
        if (canShare) {
            await navigator.share(shareData);
            showToast('Recipe shared successfully!');
        } else {
            // Always fallback to custom share modal for broader compatibility
            showShareModal(recipe, shareData);
        }
    } catch (error) {
        // Handle all errors by showing the share modal
        if (error.name !== 'AbortError') {
            console.log('Native sharing not available, using fallback modal');
            showShareModal(recipe, shareData);
        }
    }
}

// Show custom share modal as fallback
function showShareModal(recipe, shareData) {
    const modal = document.createElement('div');
    modal.className = 'share-modal';
    modal.innerHTML = `
        <div class="share-modal-content">
            <div class="share-modal-header">
                <h3>Share Recipe</h3>
                <button class="close-share" onclick="this.closest('.share-modal').remove()">×</button>
            </div>
            <div class="share-modal-body">
                <p>Share "${recipe.name}" with your friends:</p>
                <div class="share-options">
                    <button class="share-btn facebook" onclick="shareToFacebook('${encodeURIComponent(shareData.url)}', '${encodeURIComponent(shareData.title)}')">
                        <i class="fab fa-facebook-f"></i> Facebook
                    </button>
                    <button class="share-btn twitter" onclick="shareToTwitter('${encodeURIComponent(shareData.text)}', '${encodeURIComponent(shareData.url)}')">
                        <i class="fab fa-twitter"></i> Twitter
                    </button>
                    <button class="share-btn whatsapp" onclick="shareToWhatsApp('${encodeURIComponent(shareData.text + ' ' + shareData.url)}')">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </button>
                    <button class="share-btn email" onclick="shareViaEmail('${encodeURIComponent(shareData.title)}', '${encodeURIComponent(shareData.text + ' ' + shareData.url)}')">
                        <i class="fas fa-envelope"></i> Email
                    </button>
                    <button class="share-btn copy" onclick="copyToClipboard('${shareData.url}')">
                        <i class="fas fa-copy"></i> Copy Link
                    </button>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(modal);
    modal.style.display = 'flex';
    
    // Close modal when clicking outside
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

// Social sharing functions
function shareToFacebook(url, title) {
    const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}&quote=${title}`;
    window.open(shareUrl, '_blank', 'width=600,height=400');
}

function shareToTwitter(text, url) {
    const shareUrl = `https://twitter.com/intent/tweet?text=${text}&url=${url}`;
    window.open(shareUrl, '_blank', 'width=600,height=400');
}

function shareToWhatsApp(text) {
    const shareUrl = `https://wa.me/?text=${text}`;
    window.open(shareUrl, '_blank');
}

function shareViaEmail(subject, body) {
    const mailtoUrl = `mailto:?subject=${subject}&body=${body}`;
    window.location.href = mailtoUrl;
}

async function copyToClipboard(text) {
    try {
        await navigator.clipboard.writeText(text);
        showToast('Link copied to clipboard!');
        document.querySelector('.share-modal').remove();
    } catch (error) {
        console.error('Error copying to clipboard:', error);
        showToast('Error copying link');
    }
}

// Toast notification system
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    // Trigger animation
    setTimeout(() => toast.classList.add('show'), 100);
    
    // Remove toast after delay
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}