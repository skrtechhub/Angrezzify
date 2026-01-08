/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{html,js}",
    "./components/**/*.{html,js}",
    "./index.html",
    "./*.html"
  ],
  theme: {
    extend: {
      colors: {
        // Primary Colors - Deep Trust & Educational Authority
        primary: {
          DEFAULT: "#1e3a8a", // blue-900
          50: "#eff6ff", // blue-50
          100: "#dbeafe", // blue-100
          200: "#bfdbfe", // blue-200
          300: "#93c5fd", // blue-300
          400: "#60a5fa", // blue-400
          500: "#3b82f6", // blue-500
          600: "#2563eb", // blue-600
          700: "#1d4ed8", // blue-700
          800: "#1e40af", // blue-800
          900: "#1e3a8a", // blue-900
        },
        // Secondary Colors - Approachable Confidence
        secondary: {
          DEFAULT: "#3b82f6", // blue-500
          50: "#eff6ff", // blue-50
          100: "#dbeafe", // blue-100
          200: "#bfdbfe", // blue-200
          300: "#93c5fd", // blue-300
          400: "#60a5fa", // blue-400
          500: "#3b82f6", // blue-500
          600: "#2563eb", // blue-600
          700: "#1d4ed8", // blue-700
        },
        // Accent Colors - Achievement Celebration
        accent: {
          DEFAULT: "#10b981", // emerald-500
          50: "#ecfdf5", // emerald-50
          100: "#d1fae5", // emerald-100
          200: "#a7f3d0", // emerald-200
          300: "#6ee7b7", // emerald-300
          400: "#34d399", // emerald-400
          500: "#10b981", // emerald-500
          600: "#059669", // emerald-600
          700: "#047857", // emerald-700
        },
        // Background & Surface Colors
        background: "#ffffff", // white
        surface: {
          DEFAULT: "#f8fafc", // slate-50
          100: "#f1f5f9", // slate-100
          200: "#e2e8f0", // slate-200
        },
        // Text Colors - Extended Reading Comfort
        text: {
          primary: "#1f2937", // gray-800
          secondary: "#6b7280", // gray-500
          tertiary: "#9ca3af", // gray-400
          inverse: "#ffffff", // white
        },
        // Semantic Colors - Feedback & Guidance
        success: {
          DEFAULT: "#059669", // emerald-600
          light: "#d1fae5", // emerald-100
        },
        warning: {
          DEFAULT: "#d97706", // amber-600
          light: "#fef3c7", // amber-100
        },
        error: {
          DEFAULT: "#dc2626", // red-600
          light: "#fee2e2", // red-100
        },
        info: {
          DEFAULT: "#3b82f6", // blue-500
          light: "#dbeafe", // blue-100
        },
        // Border Colors
        border: {
          DEFAULT: "#e5e7eb", // gray-200
          light: "#f3f4f6", // gray-100
          dark: "#d1d5db", // gray-300
        },
      },
      fontFamily: {
        // Primary Font - Headlines & CTAs
        poppins: ['Poppins', 'sans-serif'],
        // Body Font - Extended Reading
        inter: ['Inter', 'sans-serif'],
        // Accent Font - Motivational Touches
        kalam: ['Kalam', 'cursive'],
        // Default Sans
        sans: ['Inter', 'sans-serif'],
      },
      fontSize: {
        'xs': ['0.75rem', { lineHeight: '1rem' }],      // 12px
        'sm': ['0.875rem', { lineHeight: '1.25rem' }],  // 14px
        'base': ['1rem', { lineHeight: '1.5rem' }],     // 16px
        'lg': ['1.125rem', { lineHeight: '1.75rem' }],  // 18px
        'xl': ['1.25rem', { lineHeight: '1.75rem' }],   // 20px
        '2xl': ['1.5rem', { lineHeight: '2rem' }],      // 24px
        '3xl': ['1.875rem', { lineHeight: '2.25rem' }], // 30px
        '4xl': ['2.25rem', { lineHeight: '2.5rem' }],   // 36px
        '5xl': ['3rem', { lineHeight: '1' }],           // 48px
        '6xl': ['3.75rem', { lineHeight: '1' }],        // 60px
      },
      boxShadow: {
        'subtle': '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
        'card': '0 1px 3px 0 rgba(0, 0, 0, 0.1)',
        'elevated': '0 4px 6px -1px rgba(0, 0, 0, 0.1)',
        'modal': '0 4px 12px 0 rgba(0, 0, 0, 0.15)',
        'hero': '0 10px 25px -5px rgba(0, 0, 0, 0.1)',
      },
      borderRadius: {
        'sm': '0.25rem',   // 4px
        'DEFAULT': '0.5rem',   // 8px
        'md': '0.5rem',    // 8px
        'lg': '0.75rem',   // 12px
        'xl': '1rem',      // 16px
        '2xl': '1.5rem',   // 24px
        'full': '9999px',
      },
      spacing: {
        '18': '4.5rem',   // 72px
        '88': '22rem',    // 352px
        '128': '32rem',   // 512px
      },
      transitionDuration: {
        'fast': '150ms',
        'base': '300ms',
        'slow': '400ms',
      },
      transitionTimingFunction: {
        'smooth': 'cubic-bezier(0.4, 0, 0.2, 1)',
      },
      animation: {
        'fade-in': 'fadeIn 300ms ease-out',
        'slide-up': 'slideUp 300ms ease-out',
        'scale-in': 'scaleIn 300ms ease-out',
        'stagger': 'fadeIn 300ms ease-out 100ms',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        scaleIn: {
          '0%': { opacity: '0', transform: 'scale(0.95)' },
          '100%': { opacity: '1', transform: 'scale(1)' },
        },
      },
      screens: {
        'xs': '475px',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
      },
      maxWidth: {
        '8xl': '88rem',
        '9xl': '96rem',
      },
      zIndex: {
        '60': '60',
        '70': '70',
        '80': '80',
        '90': '90',
        '100': '100',
      },
    },
  },
  plugins: [
    // Add any Tailwind plugins here if needed
    // Example: require('@tailwindcss/forms'),
  ],
}