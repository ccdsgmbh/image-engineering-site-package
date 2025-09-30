tailwind.config = {
    darkMode: 'class',
    theme: {
        container: {
            center: true,
            padding: '1.5rem',
            screens: {
                '2xl': '1400px'
            }
        },
        extend: {
            colors: {
                border: 'hsl(var(--border))',
                input: 'hsl(var(--input))',
                ring: 'hsl(var(--ring))',
                background: 'hsl(var(--background))',
                foreground: 'hsl(var(--foreground))',
                primary: {
                    DEFAULT: 'hsl(var(--primary))',
                    foreground: 'hsl(var(--primary-foreground))'
                },
                secondary: {
                    DEFAULT: 'hsl(var(--secondary))',
                    foreground: 'hsl(var(--secondary-foreground))'
                },
                muted: {
                    DEFAULT: 'hsl(var(--muted))',
                    foreground: 'hsl(var(--muted-foreground))'
                },
                accent: {
                    DEFAULT: 'hsl(var(--accent))',
                    foreground: 'hsl(var(--accent-foreground))'
                },
                destructive: {
                    DEFAULT: 'hsl(var(--destructive))',
                    foreground: 'hsl(var(--destructive-foreground))'
                },
                card: {
                    DEFAULT: 'hsl(var(--card))',
                    foreground: 'hsl(var(--card-foreground))'
                },
                popover: {
                    DEFAULT: 'hsl(var(--popover))',
                    foreground: 'hsl(var(--popover-foreground))'
                },
                downloads: {
                    bg: 'hsl(var(--downloads-bg))',
                    text: 'hsl(var(--downloads-text))',
                    border: 'hsl(var(--downloads-border))',
                    hover: 'hsl(var(--downloads-hover))'
                },
                scandi: {
                    grey: 'hsl(var(--scandi-grey))',
                    'light-grey': 'hsl(var(--scandi-light-grey))',
                    white: 'hsl(var(--scandi-white))'
                },
                light: {
                    background: 'hsl(var(--light-background))',
                    foreground: 'hsl(var(--light-foreground))',
                    muted: 'hsl(var(--light-muted))',
                    card: 'hsl(var(--light-card))',
                    border: 'hsl(var(--light-border))'
                },
                'accent-violet': 'hsl(var(--accent-violet))',
                'accent-soft-blue': 'hsl(var(--accent-soft-blue))',
                'icon-camera': 'hsl(var(--icon-camera))',
                'icon-camera-fg': 'hsl(var(--icon-camera-fg))',
                'icon-testing': 'hsl(var(--icon-testing))',
                'icon-testing-fg': 'hsl(var(--icon-testing-fg))',
                'icon-performance': 'hsl(var(--icon-performance))',
                'icon-performance-fg': 'hsl(var(--icon-performance-fg))',
                'icon-general': 'hsl(var(--icon-general))',
                'icon-general-fg': 'hsl(var(--icon-general-fg))',
                'automotive-button': 'hsl(var(--automotive-button))',
                'automotive-icon-bg': 'hsl(var(--automotive-icon-bg))',
                'automotive-tests-bg': 'hsl(var(--automotive-tests-bg))',
                'training-button': 'hsl(var(--training-button))',
                'training-bg': 'hsl(var(--training-bg))',
                'decision-button': 'hsl(var(--decision-button))',
                'decision-icon-bg': 'hsl(var(--decision-icon-bg))',
                'academia-button': 'hsl(var(--academia-button))',
                'academia-button-hover': 'hsl(var(--academia-button-hover))',
                'academia-icon-bg': 'hsl(var(--academia-icon-bg))',
                'hotspot-primary': 'hsl(var(--hotspot-primary))',
                'explore-button': 'hsl(var(--explore-button))'
            },
            fontFamily: {
                roboto: ['"Roboto"', 'system-ui', 'sans-serif']
            },
            borderRadius: {
                lg: 'var(--radius)',
                md: 'calc(var(--radius) - 2px)',
                sm: 'calc(var(--radius) - 4px)'
            },
            boxShadow: {
                soft: '0 4px 20px hsla(220,15%,20%,0.06)',
                gentle: '0 2px 12px hsla(220,10%,40%,0.08)',
                warm: '0 6px 25px hsla(220,8%,30%,0.12)',
                glow: '0 0 40px hsla(58,95%,45%,0.15)',
                elegant: '0 18px 40px rgba(7,15,25,0.45)'
            },
            backgroundImage: {
                'gradient-primary': 'linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-glow)))',
                'gradient-hero': 'linear-gradient(135deg, hsl(220 25% 8%) 0%, hsl(220 20% 10%) 50%, hsl(220 25% 8%) 100%)'
            },
            keyframes: {
                'accordion-down': {
                    from: { height: '0' },
                    to: { height: 'var(--radix-accordion-content-height)' }
                },
                'accordion-up': {
                    from: { height: 'var(--radix-accordion-content-height)' },
                    to: { height: '0' }
                },
                'fade-in': {
                    from: { opacity: '0', transform: 'translateY(20px)' },
                    to: { opacity: '1', transform: 'translateY(0)' }
                },
                'ken-burns': {
                    '0%': { transform: 'scale(1) translate(0, 0)' },
                    '100%': { transform: 'scale(1.12) translate(-2%, -2%)' }
                },
                'slide-in-up': {
                    from: { opacity: '0', transform: 'translateY(30px)' },
                    to: { opacity: '1', transform: 'translateY(0)' }
                }
            },
            animation: {
                'accordion-down': 'accordion-down 0.3s ease-out',
                'accordion-up': 'accordion-up 0.3s ease-out',
                'fade-in': 'fade-in 0.6s ease forwards',
                'ken-burns': 'ken-burns 18s ease-in-out forwards',
                'slide-in-up': 'slide-in-up 0.6s ease forwards'
            },
            opacity: {
                15: '0.15'
            }
        }
    }
};
