module.exports = {
  future: {
    defaultLineHeights: true,
    standardFontWeights: true,
    purgeLayersByDefault: true,
    removeDeprecatedGapUtilities: true,
  },
  purge: [],
  theme: {
    container: {
      padding: '2rem',
    },
    extend: {},
    typography: (theme) => ({
      default: {
        css: {
          a: {
            '&:hover': {
              color: theme('colors.blue.500'),
            },
          },
          code: {
            color: theme('colors.gray.700'),
            padding: theme('spacing.1'),
            fontSize: '0.75rem',
            boxShadow: theme('boxShadow.default'),
            fontWeight: theme('fontWeight.light'),
            borderRadius: theme('borderRadius.default'),
            backgroundColor: theme('colors.gray.200'),
            '&::before, &::after': {
              content: 'none !important',
            },
          },
          table: {
            thead: {
              th: {
                padding: theme('spacing.3'),
                textTransform: 'uppercase',
              },
            },
            tbody: {
              td: {
                padding: theme('spacing.3'),
              }
            }
          }
        }
      }
    })
  },
  variants: {},
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
