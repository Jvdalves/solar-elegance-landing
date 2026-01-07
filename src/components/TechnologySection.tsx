import { motion, useInView } from "framer-motion";
import { useRef } from "react";
import { Shield, Award, Wifi, Cpu, ArrowRight } from "lucide-react";
import technologyImage from "@/assets/technology-solar.jpg";

const features = [
  {
    icon: Shield,
    title: "Proteção Anti-Corrosão",
    description: "Painéis certificados para névoa salina e umidade de 99%.",
  },
  {
    icon: Award,
    title: "Garantia de Performance",
    description: "Garantia linear de produção de energia por 25 anos.",
  },
  {
    icon: Wifi,
    title: "Monitoramento 24h",
    description: "Acompanhe sua produção pelo App no celular em tempo real.",
  },
];

const TechnologySection = () => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-100px" });

  const scrollToContact = () => {
    const element = document.getElementById("contato");
    if (element) {
      element.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <section id="tecnologia" ref={ref} className="light-section bg-light section-padding overflow-hidden">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
          {/* Left Content */}
          <motion.div
            initial={{ opacity: 0, x: -50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6 }}
          >
            <h2 className="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-forest leading-tight mb-6">
              Equipamentos de Elite que aguentam o "Sol e Chuva" de Belém.
            </h2>

            <p className="text-forest/70 text-lg leading-relaxed mb-8">
              Sabemos que o clima amazônico é impiedoso. Por isso, só trabalhamos com tecnologia
              Tier-1, testada em condições extremas de umidade e calor.
            </p>

            {/* Features */}
            <div className="space-y-6 mb-10">
              {features.map((feature, index) => (
                <motion.div
                  key={index}
                  initial={{ opacity: 0, x: -20 }}
                  animate={isInView ? { opacity: 1, x: 0 } : {}}
                  transition={{ duration: 0.4, delay: 0.3 + index * 0.1 }}
                  className="flex items-start gap-4"
                >
                  <div className="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center flex-shrink-0">
                    <feature.icon className="w-5 h-5 text-accent" />
                  </div>
                  <div>
                    <h4 className="font-display font-bold text-forest mb-1">
                      {feature.title}
                    </h4>
                    <p className="text-forest/60 text-sm">{feature.description}</p>
                  </div>
                </motion.div>
              ))}
            </div>

            <button onClick={scrollToContact} className="btn-gold-outline flex items-center gap-3 group">
              Garantir tecnologia de ponta
              <ArrowRight className="w-5 h-5 group-hover:translate-x-1 transition-transform" />
            </button>
          </motion.div>

          {/* Right - Image */}
          <motion.div
            initial={{ opacity: 0, x: 50 }}
            animate={isInView ? { opacity: 1, x: 0 } : {}}
            transition={{ duration: 0.6, delay: 0.2 }}
            className="relative"
          >
            <div className="rounded-3xl overflow-hidden shadow-2xl shadow-forest/20">
              <img
                src={technologyImage}
                alt="Painéis solares com tecnologia avançada"
                className="w-full h-auto object-cover"
              />

              {/* Floating card */}
              <motion.div
                initial={{ opacity: 0, y: 20 }}
                animate={isInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.6, delay: 0.6 }}
                className="absolute bottom-6 left-6 right-6 bg-foreground/95 backdrop-blur-xl rounded-2xl p-4 flex items-center gap-4"
              >
                <div className="w-12 h-12 rounded-xl bg-accent flex items-center justify-center flex-shrink-0">
                  <Cpu className="w-6 h-6 text-accent-foreground" />
                </div>
                <div>
                  <h5 className="font-display font-bold text-forest text-sm">
                    Inversores Microprocessados
                  </h5>
                  <p className="text-forest/60 text-xs">
                    Eficiência máxima mesmo em dias nublados
                  </p>
                </div>
              </motion.div>
            </div>
          </motion.div>
        </div>
      </div>
    </section>
  );
};

export default TechnologySection;
