tailwind.config = {
    theme: {
        extend: {
            fontFamily: { sans: ['Inter', 'sans-serif'] },
            colors: {
                indigo: { 400: '#818CF8', 500: '#6366F1', 600: '#4F46E5', 900: '#312E81' },
                slate: { 50: '#F8FAFC', 900: '#0F172A' }
            },
            animation: {
                'float': 'float 6s ease-in-out infinite',
                'slide-up': 'slideUp 0.8s ease-out forwards',
                'ken-burns': 'kenBurns 30s ease-in-out infinite alternate',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-10px)' },
                },
                slideUp: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                kenBurns: {
                    '0%': { transform: 'scale(1) translate(0, 0)' },
                    '100%': { transform: 'scale(1.15) translate(-2%, -1%)' },
                }
            },
            boxShadow: { 'glow': '0 0 20px rgba(79, 70, 229, 0.15)' }
        }
    }
}
