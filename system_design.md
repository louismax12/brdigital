Mission: Implement a responsive, full-screen Vimeo video background for the company profile landing page.

Context: 
- We are using Vimeo as our video CDN to handle large bandwidth.
- The target Vimeo Video ID is: 1228725889
- The stack involves standard web interfaces (HTML/CSS), or Laravel Blade templates if you detect them in this workspace.

Task Plan:
1. UI/HTML Structure:
   - Identify the main landing page layout file.
   - Create a main container div for the video background.
   - Embed the Vimeo iframe using this exact source URL: 
     https://player.vimeo.com/video/1228725889?background=1&autoplay=1&loop=1&byline=0&title=0
   - Create a content overlay div inside the container that will hold the main landing page text (e.g., "Welcome to Our Company Profile").

2. CSS Styling:
   - Style the main video container to be exactly `100vw` and `100vh`, with `overflow: hidden` and `position: relative`.
   - Style the Vimeo iframe to be `position: absolute`, perfectly centered using `transform: translate(-50%, -50%)`. 
   - Apply `width: 100vw; height: 56.25vw; min-height: 100vh; min-width: 177.77vh;` to the iframe to ensure a perfect 16:9 aspect ratio across all screen sizes without stretching.
   - Apply `pointer-events: none;` and `z-index: 1` to the iframe so the user cannot interact with it.
   - Style the content overlay with `position: relative`, `z-index: 2`, and use Flexbox to center the text both horizontally and vertically. Set text color to white for contrast.

3. Execution & Testing:
   - Create or update the necessary HTML/Blade and CSS files.
   - Use your browser agent to open the local development server.
   - Verify visually that the video covers the entire screen, autoplay works without sound, and the overlay text is centered and clearly readable on top of the video.