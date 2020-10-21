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
            fontWeight: theme('fontWeight.light'),
            paddingTop: theme('spacing.1'),
            paddingBottom: theme('spacing.1'),
            paddingLeft: theme('spacing.2'),
            paddingRight: theme('spacing.2'),
            borderRadius: theme('borderRadius.rounded'),
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
