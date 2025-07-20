# Let's Cook Curry - Development Guide

## Project Overview
A full-stack Indian recipe website built with vanilla HTML, CSS, JavaScript frontend and Supabase backend. Features recipe browsing by region/diet/spice level, detailed recipe pages with photography, user-generated reviews/ratings, favorite/bookmark system, and social sharing capabilities.

## Architecture
- **Frontend**: Vanilla HTML/CSS/JS with `index.html` as single entry point
- **Backend**: Supabase (PostgreSQL database, real-time API, authentication ready)
- **Data Storage**: Dynamic database-driven content with local session management
- **Responsive Design**: Mobile-first approach with CSS Grid and Flexbox
- **Styling**: CSS custom properties for consistent theming with Indian-inspired color palette
- **User Experience**: Smooth animations, toast notifications, modal interactions

## Key Features Implemented
- **Recipe Management**: Database-driven recipe storage and retrieval
- **Filtering System**: By region, dietary restrictions, and spice levels
- **Modal Recipe Views**: Detailed ingredients, instructions, and user reviews
- **User Interactions**: Rating system, review submission, favorite/bookmark recipes
- **Social Features**: Multi-platform recipe sharing (Facebook, Twitter, WhatsApp, Email, Copy Link)
- **Session Management**: User session tracking for favorites (ready for full authentication)
- **Real-time Updates**: Live favorite status updates across UI components
- **Responsive Design**: Mobile-optimized layouts and interactions

## Database Schema
**Tables:**
- `recipes` - Core recipe data (ingredients, instructions, metadata)
- `ratings` - User recipe ratings (1-5 stars)
- `reviews` - User recipe reviews with text content
- `favorites` - User bookmark system with session tracking

**Key Relationships:**
- recipes ← ratings (one-to-many)
- recipes ← reviews (one-to-many)  
- recipes ← favorites (one-to-many)

## File Structure
- `index.html` - Single page application with modal system
- `styles.css` - Complete styling including recipe cards, modal, share system, favorites UI
- `script.js` - Full application logic: database operations, UI interactions, sharing, favorites
- `YOUWARE.md` - Development documentation

## Supabase Integration
- **Database Operations**: CRUD operations for recipes, ratings, reviews, favorites
- **Error Handling**: Graceful fallbacks to sample data if database unavailable
- **Session Management**: localStorage-based user sessions (upgradeable to full auth)
- **Real-time Capability**: Ready for real-time updates and notifications

## User Experience Features
- **Toast Notifications**: Success/error feedback for user actions
- **Favorite System**: Heart icons with visual feedback and database persistence
- **Social Sharing**: Native sharing API with custom modal fallback
- **Modal Interactions**: Keyboard navigation (Escape key), click-outside closing
- **Responsive Cards**: Hover effects, image overlays, action buttons
- **Loading States**: Database operation feedback and error handling

## Development Commands
```bash
# Local development server
python -m http.server 8000
# or
npx live-server
# or
php -S localhost:8000
```

## Recipe Content
6 authentic Indian recipes with complete data:
- **North Indian**: Butter Chicken, Punjabi Chole, Palak Paneer
- **South Indian**: Sambar, Kerala Fish Curry
- **East Indian**: Bengali Fish Curry

Each recipe includes authentic ingredients, step-by-step instructions, cultural stories, and user-generated ratings/reviews.

## User Session System
- **Session Generation**: Unique user identifiers for favorites tracking
- **localStorage Persistence**: Session maintained across browser sessions
- **Database Linking**: User sessions linked to favorites for persistence
- **Authentication Ready**: Easily upgradeable to full user authentication system

## Social Sharing Implementation
- **Native Sharing**: Uses Web Share API when available
- **Fallback Modal**: Custom sharing interface for unsupported browsers
- **Multi-Platform**: Facebook, Twitter, WhatsApp, Email, and copy-to-clipboard
- **SEO Ready**: Proper meta tags and URL structure for social sharing