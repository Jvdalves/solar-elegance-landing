import { motion, useInView } from "framer-motion";
import { useRef } from "react";
import { ClipboardCheck, FileText, CheckCircle, Zap } from "lucide-react";

const steps = [
  {
    icon: ClipboardCheck,
    number: "1",
    title: "Vistoria Premium",
    description: "Análise técnica gratuita do seu telhado e rede elétrica.",
  },
  {
    icon: FileText,
    number: "2",
    title: "Engenharia",
    description: "Projeto personalizado para zerar sua conta com segurança.",
  },
  {
    icon: CheckCircle,
    number: "3",
    title: "Burocracia Zero",
    description: "Nós resolvemos toda a papelada chata na Equatorial.",
  },
  {
    icon: Zap,
    number: "4",
    title: "Ativação",
    description: "Instalação rápida, limpa e ativação da sua usina.",
  },
];

const ConciergeSection = () => {
  const ref = useRef(null);
  const isInView = useInView(ref, { once: true, margin: "-100px" });

  return (
    <section ref={ref} className="light-section bg-light section-padding">
      <div className="container mx-auto px-4">
        {/* Header */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          animate={isInView ? { opacity: 1, y: 0 } : {}}
          transition={{ duration: 0.6 }}
          className="text-center mb-16"
        >
          <span className="text-xs font-semibold text-forest/40 uppercase tracking-widest mb-4 block">
            Experiência do Cliente
          </span>
          <h2 className="font-display text-3xl md:text-4xl lg:text-5xl font-bold text-forest leading-tight mb-4">
            Nós cuidamos da engenharia.
            <br />
            <span className="text-accent">Você cuida do conforto.</span>
          </h2>
          <p className="text-forest/60 text-lg max-w-2xl mx-auto">
            Sem dores de cabeça, sem filas, sem ligações para a concessionária. Nosso serviço de
            concierge resolve tudo para você, do projeto à homologação.
          </p>
        </motion.div>

        {/* Steps */}
        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          {steps.map((step, index) => (
            <motion.div
              key={index}
              initial={{ opacity: 0, y: 40 }}
              animate={isInView ? { opacity: 1, y: 0 } : {}}
              transition={{ duration: 0.6, delay: 0.2 + index * 0.1 }}
              className="text-center"
            >
              {/* Icon with number */}
              <div className="relative inline-flex mb-6">
                <div className="w-20 h-20 rounded-2xl border-2 border-forest/10 bg-foreground flex items-center justify-center">
                  <step.icon className="w-8 h-8 text-forest/60" />
                </div>
                <div className="absolute -top-2 -right-2 w-7 h-7 rounded-full bg-accent flex items-center justify-center">
                  <span className="font-display font-bold text-accent-foreground text-sm">
                    {step.number}
                  </span>
                </div>
              </div>

              {/* Content */}
              <h4 className="font-display font-bold text-forest text-lg mb-2">
                {step.number}. {step.title}
              </h4>
              <p className="text-forest/60 text-sm">{step.description}</p>
            </motion.div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default ConciergeSection;
