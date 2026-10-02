---
name: Kinetic Enterprise Portal
colors:
  surface: '#f9f9ff'
  surface-dim: '#d7dae5'
  surface-bright: '#f9f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f1f3ff'
  surface-container: '#ebedfa'
  surface-container-high: '#e5e8f4'
  surface-container-highest: '#dfe2ee'
  on-surface: '#181c24'
  on-surface-variant: '#5a4139'
  inverse-surface: '#2c3039'
  inverse-on-surface: '#eef0fc'
  outline: '#8e7067'
  outline-variant: '#e2bfb4'
  surface-tint: '#ad3300'
  primary: '#a93200'
  on-primary: '#ffffff'
  primary-container: '#d1430a'
  on-primary-container: '#fffbff'
  inverse-primary: '#ffb59e'
  secondary: '#575e70'
  on-secondary: '#ffffff'
  secondary-container: '#d9dff5'
  on-secondary-container: '#5c6274'
  tertiary: '#00685f'
  on-tertiary: '#ffffff'
  tertiary-container: '#008378'
  on-tertiary-container: '#f4fffc'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#ffdbd0'
  primary-fixed-dim: '#ffb59e'
  on-primary-fixed: '#3a0b00'
  on-primary-fixed-variant: '#842500'
  secondary-fixed: '#dce2f7'
  secondary-fixed-dim: '#c0c6db'
  on-secondary-fixed: '#141b2b'
  on-secondary-fixed-variant: '#404758'
  tertiary-fixed: '#89f5e7'
  tertiary-fixed-dim: '#6bd8cb'
  on-tertiary-fixed: '#00201d'
  on-tertiary-fixed-variant: '#005049'
  background: '#f9f9ff'
  on-background: '#181c24'
  surface-variant: '#dfe2ee'
  brand-orange-deep: '#EA580C'
  surface-light: '#FFFFFF'
  surface-subtle: '#F8FAFC'
  border-subtle: '#E2E8F0'
  border-strong: '#CBD5E1'
  accent-forest: '#17221D'
  state-success: '#16A34A'
  state-warning: '#D97706'
  state-danger: '#DC2626'
typography:
  display-hero:
    fontFamily: Space Grotesk
    fontSize: 56px
    fontWeight: '700'
    lineHeight: 64px
    letterSpacing: -0.03em
  display-hero-mobile:
    fontFamily: Space Grotesk
    fontSize: 36px
    fontWeight: '700'
    lineHeight: 44px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Space Grotesk
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Space Grotesk
    fontSize: 26px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Space Grotesk
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 30px
    letterSpacing: -0.01em
  headline-sm:
    fontFamily: Space Grotesk
    fontSize: 18px
    fontWeight: '600'
    lineHeight: 24px
    letterSpacing: 0em
  body-lg:
    fontFamily: DM Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 26px
  body-md:
    fontFamily: DM Sans
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 22px
  body-sm:
    fontFamily: DM Sans
    fontSize: 12px
    fontWeight: '400'
    lineHeight: 18px
  label-lg:
    fontFamily: DM Sans
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.01em
  label-md:
    fontFamily: DM Sans
    fontSize: 12px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.02em
  label-xs:
    fontFamily: DM Sans
    fontSize: 10px
    fontWeight: '700'
    lineHeight: 14px
    letterSpacing: 0.04em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  gutter: 1.5rem
  gutter-mobile: 0.75rem
  margin: 2rem
  margin-mobile: 1rem
  space-xs: 0.25rem
  space-sm: 0.5rem
  space-md: 1rem
  space-lg: 1.5rem
  space-xl: 2.5rem
---

## Brand & Style

This design system is engineered specifically for Indonesian MSMEs (UMKM) requiring a balanced dual-nature interface: a clean, high-clarity company profile coupled with a high-density, performance-driven CRM workspace. The visual aesthetic fuses crisp utilitarian modernism with bold, high-contrast visual signifiers.

The interface prioritizes immediate comprehension, tactile responsiveness, and structural legibility. By pairing stark, functional dark-mode frames and navigation hubs with radiant white and cool slate functional canvas surfaces, business operators gain fatigue-free prolonged software engagement. The emotional tone is decisive, industrious, approachable, and uncompromisingly professional—projecting reliability and digital acceleration for emerging enterprises.

## Colors

The color architecture is built around dynamic functional zoning:
- **Primary (`#F15A24` / `#EA580C`)**: An energetic, hyper-visible industrial orange deployed for focal interactions, status highlights, key metric alerts, and conversion paths.
- **Secondary (`#111827`) & Neutral (`#0B0F17`)**: Deep slate and dark charcoal provide anchoring contrast for primary sidebars, header rails, and system notifications, keeping visual noise low while retaining authority.
- **Tertiary (`#0D9488`)**: A stabilizing teal accent reserved for positive financial metrics, verified business tags, and real-time synchronization states.
- **Surfaces (`#FFFFFF` & `#F8FAFC`)**: Crisp white cards over light cool gray bases create distinct elevation without reliance on heavy shadows, maximizing readability under varying outdoor and mobile light conditions.
- **Borders (`#E2E8F0` & `#CBD5E1`)**: Crisp, low-to-mid contrast boundaries enforce structural separation between dense MSME data sets, transaction records, and contact tables.

## Typography

The typographic hierarchy implements an intentional balance between technological confidence and transactional readability:
- **Headlines (Space Grotesk)**: Chosen for its geometric, engineered precision. It gives company profile banners and CRM metric dashboards an authoritative, forward-thinking edge.
- **Body & Labels (DM Sans)**: Provides high legibility in dense CRM data tables, order records, customer communication histories, and form fields. It remains neutral and fatigue-free across extended desktop workflows and handheld mobile views.
- **Numbers & Metrics**: Quantitative data points (currency, lead counts, conversion ratios) borrow from Space Grotesk’s tabular clarity for effortless scanning.

## Layout & Spacing

The structural layout utilizes a responsive 12-column grid in portal interfaces and an 8-column layout in content/profile presentations:
- **Desktop (1024px and above)**: 12 columns with a fixed 260px administrative navigation drawer, fluid canvas layout, 24px (`1.5rem`) gutters, and 32px (`2rem`) outer boundaries.
- **Tablet (768px - 1023px)**: 8 columns with 16px gutters; sidebars collapse into a persistent, icon-only rail or drawer overlay.
- **Mobile (Below 768px)**: 4 columns with 12px (`0.75rem`) gutters and 16px (`1rem`) horizontal screen padding. CRM tables convert into stacked interactive transaction cards.
- **Vertical Rhythm**: Spacing scales follow a rigorous 4px baseline system (`0.25rem` to `2.5rem`), standardizing relationships between input labels, form fields, table cells, and macro-section groupings.

## Elevation & Depth

This design system avoids heavy blurred skeuomorphic drop shadows in favor of a low-elevation, structural border-first visual strategy:
- **Level 0 (Flat Ground)**: Base application background (`#F8FAFC`). Pure utility surface.
- **Level 1 (Card & Module Layer)**: Pure white background (`#FFFFFF`) with a 1px solid border (`#E2E8F0`). Enhanced by a feather-light ambient drop: `0px 1px 2px rgba(15, 23, 42, 0.04)`.
- **Level 2 (Dropdowns, Tooltips & Popovers)**: Pure white surface, 1px solid border (`#CBD5E1`), and an ambient directional shadow: `0px 8px 16px -4px rgba(15, 23, 42, 0.08)`.
- **Level 3 (Modal Sheets & Confirmation Dialogs)**: Pure white surface layered over an intense dark tint (`rgba(11, 15, 23, 0.65)` backdrop with `blur(4px)`), with elevation `0px 20px 25px -5px rgba(15, 23, 42, 0.12)`.
- **Dark Mode Nav Layer**: Solid charcoal (`#111827`) frame with high-contrast active orange boundaries to establish unmistakable visual separation from the operational workspace.

## Shapes

The design system adopts a **Soft (Level 1)** corner philosophy. Components utilize tight, controlled radii (4px base, 8px for containers, 12px for modal sheets) that reinforce functional software utility without decorative distractions. Data-dense tables, metric cards, and form inputs retain structured, rectangular dignity, ensuring maximum content space inside compact screens common among business managers.

## Components

- **Buttons**:
  - *Primary*: Background `#F15A24`, text `#FFFFFF`, font `label-lg`, 4px radius, 0.5rem padding vertical, 1rem padding horizontal. Hover state shifts to `#EA580C`.
  - *Secondary*: Background `#111827`, text `#FFFFFF`, hover `#1F2937`.
  - *Outline / Ghost*: 1px solid `#CBD5E1` on white, text `#111827`, hover background `#F8FAFC` with border `#F15A24`.

- **Input Fields & Forms**:
  - Clean 1px solid border (`#E2E8F0`) with 4px border radius.
  - Active/Focused state: 1.5px border `#F15A24` and a subtle 2px glow ring (`rgba(241, 90, 36, 0.15)`).
  - Background defaults to `#FFFFFF` with labels rendered in `label-md` using `#111827`.

- **Cards & Data Panels**:
  - Canvas surface `#FFFFFF` bounded by a 1px `#E2E8F0` border.
  - Card headers feature clear separation via an internal 1px baseline rule with uppercase `label-xs` tags indicating entity status (e.g., "Active Lead", "Invoice Settled").

- **Chips & Status Tags**:
  - Compact badges using 4px radius with muted, accessible tint pairings:
    - *Success*: Background `#DCFCE7`, text `#166534`.
    - *Pending / Progress*: Background `#FFEDD5`, text `#C2410C`.
    - *Neutral / Category*: Background `#F1F5F9`, text `#334155`.

- **Lists & Data Tables**:
  - Alternating hover row tint `#F8FAFC`. Rows separated strictly with crisp 1px borders (`#F1F5F9`).
  - Table headers fixed with `label-xs` uppercase text, background `#F8FAFC`, letter-spacing `0.04em`.

- **Checkboxes & Radios**:
  - Custom 4px rounded checks and rounded circular radios with 1.5px `#CBD5E1` borders.
  - When checked: Fill `#F15A24` with sharp white SVG checks or radio pins.

- **KPI Metric Tiles (CRM Specific)**:
  - High-visibility cards hosting Space Grotesk headline numbers, contextual delta arrows (green/red), and quick-action utility popovers for fast sales operations.