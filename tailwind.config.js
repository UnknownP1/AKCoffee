import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
    extend: {
      colors: {
        "surface-tint": "#006a6a",
        error: "#ba1a1a",
        "on-secondary-fixed-variant": "#474747",
        "inverse-surface": "#2f3131",
        "outline-variant": "#bdc9c8",
        "on-error": "#ffffff",
        tertiary: "#5a5a5a",
        "on-tertiary": "#ffffff",
        "surface-container": "#eeeeee",
        "error-container": "#ffdad6",
        "surface-bright": "#f9f9f9",
        "on-tertiary-container": "#fbf8f8",
        secondary: "#5e5e5e",
        "on-secondary-container": "#646464",
        "primary-container": "#008080",
        "surface-container-low": "#f3f3f3",
        "surface-container-high": "#e8e8e8",
        "on-primary-container": "#e3fffe",
        "tertiary-container": "#737272",
        "tertiary-fixed": "#e4e2e2",
        "on-tertiary-fixed": "#1b1c1c",
        surface: "#f9f9f9",
        primary: "#006565",
        outline: "#6e7979",
        "on-primary-fixed": "#002020",
        "on-primary": "#ffffff",
        "on-secondary-fixed": "#1b1b1b",
        background: "#f9f9f9",
        "inverse-primary": "#76d6d5",
        "secondary-container": "#e2e2e2",
        "primary-fixed-dim": "#76d6d5",
        "on-error-container": "#93000a",
        "surface-container-highest": "#e2e2e2",
        "on-tertiary-fixed-variant": "#474747",
        "surface-variant": "#e2e2e2",
        "on-primary-fixed-variant": "#004f4f",
        "secondary-fixed-dim": "#c6c6c6",
        "on-background": "#1a1c1c",
        "on-secondary": "#ffffff",
        "on-surface": "#1a1c1c",
        "primary-fixed": "#93f2f2",
        "tertiary-fixed-dim": "#c8c6c6",
        "surface-dim": "#dadada",
        "inverse-on-surface": "#f1f1f1",
        "secondary-fixed": "#e2e2e2",
        "surface-container-lowest": "#ffffff",
        "on-surface-variant": "#3e4949",
      },

      borderRadius: {
        DEFAULT: "0.25rem",
        lg: "0.5rem",
        xl: "0.75rem",
        full: "9999px",
      },

      spacing: {
        gutter: "24px",
        "margin-mobile": "16px",
        sm: "8px",
        "margin-desktop": "48px",
        xs: "4px",
        xl: "40px",
        md: "16px",
        base: "4px",
        lg: "24px",
        "2xl": "64px",
      },

      fontFamily: {
        body: ["Hanken Grotesk", "sans-serif"],
        label: ["Hanken Grotesk", "sans-serif"],
        headline: ["Hanken Grotesk", "sans-serif"],
        display: ["Hanken Grotesk", "sans-serif"],
      },

      fontSize: {
        "body-lg": ["18px", { lineHeight: "28px", fontWeight: "400" }],
        "label-md": [
          "14px",
          { lineHeight: "20px", letterSpacing: "0.01em", fontWeight: "500" },
        ],
        "body-md": ["16px", { lineHeight: "24px", fontWeight: "400" }],
        "headline-md": ["24px", { lineHeight: "32px", fontWeight: "600" }],
        "headline-lg-mobile": ["28px", { lineHeight: "36px", fontWeight: "600" }],
        "label-sm": [
          "12px",
          { lineHeight: "16px", letterSpacing: "0.05em", fontWeight: "600" },
        ],
        "display-lg": [
          "56px",
          { lineHeight: "64px", letterSpacing: "-0.02em", fontWeight: "700" },
        ],
        "headline-lg": [
          "32px",
          { lineHeight: "40px", letterSpacing: "-0.01em", fontWeight: "600" },
        ],
      },
    },
  },
  plugins: [forms],
};