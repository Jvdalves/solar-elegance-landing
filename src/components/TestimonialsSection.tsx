import { motion, useInView } from "framer-motion";
import { useRef } from "react";
import { Play } from "lucide-react";

const testimonials = [
  {
    location: "Residencial Lago Azul",
    savings: "Economia de R$ 1.200/mês",
    gradient: "from-emerald-900 to-teal-800",
  },
  {
    location: "Condomínio Mangueirão",
    savings: "Economia de R$ 980/mês",
    gradient: "from-rose-900 to-orange-800",
  },
  {
    location: "Bairro Batista Campos",
    savings: "Economia de R$ 1.450/mês",
    gradient: "from-sky-900 to-blue-800",
  },
];

const TestimonialsSection = () => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-100px" });

  return (
    <section id="depoimentos" ref={ref} className="light-section bg-light section-padding">
      <div className="container mx-auto px-4">
        {/* Header */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6 }}
          className="text-center mb-16"
        >
          <h2 className="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-forest leading-tight mb-4">
            Não acredite na gente.
            <br />
            Acredite nos seus vizinhos.
          </h2>
          <p className="text-forest/60 text-lg">
            Famílias reais, resultados reais em Belém e Ananindeua.
          </p>
        </motion.div>

        {/* Video Cards */}
        <div className="grid md:grid-cols-3 gap-6 lg:gap-8">
          {testimonials.map((testimonial, index) => (
            <motion.div
              key={index}
              initial={{ opacity: 0, y: 40 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 + index * 0.1 }}
              className="video-card group"
            >
              {/* Background gradient */}
              <div className={`absolute inset-0 bg-gradient-to-br ${testimonial.gradient}`} />

              {/* Play button */}
              <div className="absolute inset-0 flex items-center justify-center z-10">
                <div className="w-16 h-16 rounded-full bg-foreground/20 backdrop-blur-sm flex items-center justify-center group-hover:scale-110 group-hover:bg-accent transition-all duration-300">
                  <Play className="w-6 h-6 text-foreground ml-1" />
                </div>
              </div>

              {/* Caption */}
              <div className="absolute bottom-0 left-0 right-0 p-6 z-10">
                <p className="font-display font-bold text-foreground text-lg">
                  {testimonial.location}
                </p>
                <p className="text-foreground/70 text-sm">{testimonial.savings}</p>
              </div>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default TestimonialsSection;
