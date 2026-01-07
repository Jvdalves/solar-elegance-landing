import { motion } from "framer-motion";
import { Sun, ArrowRight, MapPin } from "lucide-react";
import heroImage from "@/assets/hero-solar.jpg";

const HeroSection = () => {
  const scrollToContact = () => {
    const element = document.getElementById("contato");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <section className="relative min-h-screen flex items-center overflow-hidden">
      {/* Background Image */}
      <div className="absolute inset-0">
        <img
          src={heroImage}
          alt="Casa de luxo com painéis solares"
          className="w-full h-full object-cover"
        />
        <div className="hero-overlay" />
      </div>

      {/* Curved bottom */}
      <div className="curve-divider">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
          <path
            d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V120Z"
            fill="hsl(210 40% 98%)"
          />
        </svg>
      </div>

      {/* Content */}
      <div className="container mx-auto relative z-10 pt-24 pb-32 px-4">
        <div className="max-w-3xl">
          {/* Badge */}
          <motion.div
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
            className="badge-gold mb-6"
          >
            <Sun className="w-4 h-4" />
            Engenharia de Elite
          </motion.div>

          {/* Headline */}
          <motion.h1
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.1 }}
            className="font-display text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6"
          >
            O maior ativo da sua casa está no{" "}
            <span className="text-accent">telhado</span>.
          </motion.h1>

          {/* Subheadline */}
          <motion.p
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="text-lg md:text-xl text-foreground/80 leading-relaxed mb-8 max-w-2xl"
          >
            Pare de alugar energia da Equatorial. Transforme a radiação solar de Belém em{" "}
            <strong className="text-foreground">patrimônio real</strong> e blinde sua família
            contra a inflação energética.
          </motion.p>

          {/* CTA Button */}
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6, delay: 0.3 }}
            className="flex flex-col sm:flex-row gap-4 items-start"
          >
            <button
              onClick={scrollToContact}
              className="btn-gold flex items-center gap-3 group"
            >
              Quero Parar de Perder Dinheiro
              <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </button>
          </motion.div>

          {/* Trust indicator */}
          <motion.div
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            transition={{ duration: 0.6, delay: 0.5 }}
            className="flex items-center gap-2 mt-6 text-sm text-foreground/60"
          >
            <span className="w-2 h-2 rounded-full bg-success animate-pulse" />
            <MapPin className="w-4 h-4" />
            <span>Instalação expressa em Belém e Região</span>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
